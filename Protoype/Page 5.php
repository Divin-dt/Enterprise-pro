<?php

// FILE: page5.php  (Page 5 - Staff Database)
// PURPOSE: Search, add, edit, and delete staff records
//          stored in the MySQL 'staff' table
// REQUIRES: config.php (database credentials) + staff.sql (table setup)


$page_title = 'Marshfield School History - Staff Database';
$active_nav = 5;

// LINE 1: Include database config and connect
require_once 'config.php';
$db = getDB();


// HANDLE FORM SUBMISSIONS (POST requests)
// PURPOSE: Process add / edit / delete actions from the form


$message = '';   // Feedback message shown after an action

// LINE 2: Handle form POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'save') {
        // LINE 3: Save (insert new or update existing record)
        $id         = intval($_POST['id'] ?? 0);
        $school     = $db->real_escape_string(trim($_POST['school_name'] ?? ''));
        $dept       = $db->real_escape_string(trim($_POST['dept']       ?? ''));
        $title      = $db->real_escape_string(trim($_POST['title']      ?? ''));
        $last       = $db->real_escape_string(trim($_POST['last_name']  ?? ''));
        $first      = $db->real_escape_string(trim($_POST['first_name'] ?? ''));
        $position   = $db->real_escape_string(trim($_POST['position']   ?? ''));
        $address    = $db->real_escape_string(trim($_POST['address']    ?? ''));
        $start      = $db->real_escape_string(trim($_POST['start_year'] ?? ''));
        $left       = $db->real_escape_string(trim($_POST['left_year']  ?? ''));
        $notes      = $db->real_escape_string(trim($_POST['notes']      ?? ''));

        // LINE 4: Validate required fields
        if (empty($school) || empty($last)) {
            $message = '<div class="info-box" style="border-color:#8b1a1a;color:#8b1a1a;">School Name and Last Name are required.</div>';
        } elseif ($id > 0) {
            // LINE 5: UPDATE existing record
            $sql = "UPDATE staff SET
                school_name='$school', dept='$dept', title='$title',
                last_name='$last', first_name='$first', position='$position',
                address='$address', start_year='$start', left_year='$left', notes='$notes'
                WHERE id=$id";
            $db->query($sql);
            $message = '<div class="info-box">Record updated successfully.</div>';
        } else {
            // LINE 6: INSERT new record
            $sql = "INSERT INTO staff
                (school_name, dept, title, last_name, first_name, position, address, start_year, left_year, notes)
                VALUES ('$school','$dept','$title','$last','$first','$position','$address','$start','$left','$notes')";
            $db->query($sql);
            $message = '<div class="info-box">New record added successfully.</div>';
        }

    } elseif ($action === 'delete') {
        // LINE 7: DELETE a record
        $id = intval($_POST['id'] ?? 0);
        if ($id > 0) {
            $db->query("DELETE FROM staff WHERE id=$id");
            $message = '<div class="info-box">Record deleted.</div>';
        }
    }
}

// ============================================================
// SEARCH / FILTER
// PURPOSE: Build the WHERE clause from search parameters
// ============================================================

// LINE 8: Get search parameters from the URL (GET request)
$s_school   = trim($_GET['s_school']   ?? '');
$s_dept     = trim($_GET['s_dept']     ?? '');
$s_position = trim($_GET['s_position'] ?? '');
$s_lastname = trim($_GET['s_lastname'] ?? '');
$s_year     = trim($_GET['s_year']     ?? '');

// LINE 9: Build WHERE conditions array
$conditions = [];
if ($s_school)   $conditions[] = "school_name LIKE '%" . $db->real_escape_string($s_school)   . "%'";
if ($s_dept)     $conditions[] = "dept = '"             . $db->real_escape_string($s_dept)     . "'";
if ($s_position) $conditions[] = "position = '"         . $db->real_escape_string($s_position) . "'";
if ($s_lastname) $conditions[] = "last_name LIKE '%"    . $db->real_escape_string($s_lastname) . "%'";
if ($s_year)     $conditions[] = "start_year = '"       . $db->real_escape_string($s_year)     . "'";

// LINE 10: Combine conditions into SQL WHERE clause
$where = $conditions ? 'WHERE ' . implode(' AND ', $conditions) : '';

// LINE 11: Sorting - column and direction
$sort_col = in_array($_GET['sort'] ?? '', ['school_name','dept','last_name','first_name','position','start_year','left_year'])
            ? $_GET['sort'] : 'last_name';
$sort_dir = (($_GET['dir'] ?? '') === 'DESC') ? 'DESC' : 'ASC';
$next_dir = ($sort_dir === 'ASC') ? 'DESC' : 'ASC';

// LINE 12: Execute the search query
$sql     = "SELECT * FROM staff $where ORDER BY $sort_col $sort_dir";
$result  = $db->query($sql);
$records = [];
while ($row = $result->fetch_assoc()) {
    $records[] = $row;
}
$count = count($records);

// LINE 13: If editing, load the record to pre-fill the form
$edit_record = null;
if (isset($_GET['edit'])) {
    $eid = intval($_GET['edit']);
    $er  = $db->query("SELECT * FROM staff WHERE id=$eid");
    if ($er) $edit_record = $er->fetch_assoc();
}

include 'includes/header.php';

// LINE 14: Helper to output a sort link in a column header
function sortLink($label, $col, $sort_col, $sort_dir, $next_dir, $get_params) {
    $params = array_merge($get_params, ['sort' => $col, 'dir' => ($sort_col === $col ? $next_dir : 'ASC')]);
    $arrow  = ($sort_col === $col) ? ($sort_dir === 'ASC' ? ' ▲' : ' ▼') : ' ⇅';
    return '<a href="page5.php?' . http_build_query($params) . '" style="color:inherit;text-decoration:none;">' . $label . $arrow . '</a>';
}
$get_base = array_filter(['s_school'=>$s_school,'s_dept'=>$s_dept,'s_position'=>$s_position,'s_lastname'=>$s_lastname,'s_year'=>$s_year]);
?>

        <!-- LINE 15: Sub-header -->
        <div class="subpage-header">Staff Database</div>

        <div class="content-full">

            <?php echo $message; ?>

            <!-- LINE 16: Info box -->
            <div class="info-box" style="margin-bottom:20px;">
                Staff records from the school logbooks. Use the search fields below to filter records.
                Leave all fields blank to show all records.
            </div>

            <!-- ============================================================
                 SEARCH FORM
                 ============================================================ -->

            <!-- LINE 17: Search form - uses GET method so results are bookmarkable -->
            <form method="GET" action="page5.php" class="db-search-form">
                <h3>Search Staff Records</h3>
                <div class="search-row">
                    <!-- LINE 18: School dropdown -->
                    <div class="search-field">
                        <label for="s_school">School Name</label>
                        <select name="s_school" id="s_school">
                            <option value="">— All Schools —</option>
                            <?php foreach (['Chapel Green Board School','Thornton Lane Board School','Marshfield School'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if ($s_school===$opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- LINE 19: Department dropdown -->
                    <div class="search-field">
                        <label for="s_dept">Department</label>
                        <select name="s_dept" id="s_dept">
                            <option value="">— All —</option>
                            <?php foreach (['Infants','Junior','Senior'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if ($s_dept===$opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- LINE 20: Position dropdown -->
                    <div class="search-field">
                        <label for="s_position">Position</label>
                        <select name="s_position" id="s_position">
                            <option value="">— All —</option>
                            <?php foreach (['Headteacher','Assistant Teacher','Pupil Teacher','Caretaker'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if ($s_position===$opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- LINE 21: Last name text search -->
                    <div class="search-field">
                        <label for="s_lastname">Last Name</label>
                        <input type="text" name="s_lastname" id="s_lastname"
                               value="<?php echo htmlspecialchars($s_lastname); ?>"
                               placeholder="Search last name...">
                    </div>
                    <!-- LINE 22: Start year search -->
                    <div class="search-field">
                        <label for="s_year">Start Year</label>
                        <input type="text" name="s_year" id="s_year"
                               value="<?php echo htmlspecialchars($s_year); ?>"
                               placeholder="e.g. 1905">
                    </div>
                </div>
                <div class="search-row">
                    <!-- LINE 23: Search and Clear buttons -->
                    <button type="submit" class="btn-search">&#128269; Search</button>
                    <a href="page5.php" class="btn-search" style="background-color:var(--colour-nav-bg); text-decoration:none;">&#10005; Clear / Show All</a>
                    <!-- LINE 24: Add button - scrolls to/shows the add form -->
                    <a href="page5.php?show_form=1" class="btn-search" style="background-color:#2d6a2d; text-decoration:none;">&#43; Add Record</a>
                </div>
            </form>

            <!-- ============================================================
                 ADD / EDIT FORM
                 PURPOSE: Shown when adding new or editing existing records
                 ============================================================ -->

            <?php if (isset($_GET['show_form']) || $edit_record): ?>
            <!-- LINE 25: Add/Edit form - POST method sends data back to this page -->
            <form method="POST" action="page5.php" class="db-search-form"
                  style="border:2px solid var(--colour-nav-active);">
                <!-- LINE 26: Hidden action field tells the PHP what to do -->
                <input type="hidden" name="action" value="save">
                <!-- LINE 27: Hidden id field - 0 for new, record ID for edit -->
                <input type="hidden" name="id" value="<?php echo $edit_record ? $edit_record['id'] : 0; ?>">

                <h3><?php echo $edit_record ? 'Edit Staff Record' : 'Add New Staff Record'; ?></h3>

                <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:12px;">
                    <?php
                    // LINE 28: Helper to output a form field with current value
                    $er = $edit_record ?: [];
                    function field($name, $label, $er, $type='text', $placeholder='') {
                        $val = htmlspecialchars($er[$name] ?? '');
                        echo "<div class='search-field'><label>$label</label>";
                        echo "<input type='$type' name='$name' value='$val' placeholder='$placeholder'>";
                        echo "</div>";
                    }
                    function selectField($name, $label, $options, $er) {
                        $val = $er[$name] ?? '';
                        echo "<div class='search-field'><label>$label</label><select name='$name'><option value=''>— Select —</option>";
                        foreach ($options as $o) {
                            $sel = ($val === $o) ? ' selected' : '';
                            echo "<option value='$o'$sel>$o</option>";
                        }
                        echo "</select></div>";
                    }
                    ?>
                    <?php selectField('school_name','School Name *',['Chapel Green Board School','Thornton Lane Board School','Marshfield School'], $er); ?>
                    <?php selectField('dept','Department',['Infants','Junior','Senior'], $er); ?>
                    <?php field('title','Title (Mr/Mrs etc)', $er, 'text', 'Mr, Mrs, Miss...'); ?>
                    <?php field('last_name','Last Name *', $er, 'text', 'Surname'); ?>
                    <?php field('first_name','First Name', $er, 'text', 'First name'); ?>
                    <?php selectField('position','Position',['Headteacher','Assistant Teacher','Pupil Teacher','Caretaker'], $er); ?>
                    <?php field('address','Address', $er, 'text', 'Address'); ?>
                    <?php field('start_year','Start Year', $er, 'text', 'e.g. 1905'); ?>
                    <?php field('left_year','Left Year', $er, 'text', 'e.g. 1912'); ?>
                    <div class="search-field" style="grid-column:1/-1;">
                        <label>Notes</label>
                        <input type="text" name="notes" value="<?php echo htmlspecialchars($er['notes'] ?? ''); ?>" placeholder="Any additional notes">
                    </div>
                </div>
                <div class="search-row" style="margin-top:12px;">
                    <button type="submit" class="btn-search" style="background-color:#2d6a2d;">&#10003; Save Record</button>
                    <a href="page5.php" class="btn-search" style="background-color:var(--colour-nav-bg); text-decoration:none;">&#10005; Cancel</a>
                </div>
            </form>
            <?php endif; ?>

            <!-- ============================================================
                 RESULTS TABLE
                 ============================================================ -->

            <!-- LINE 29: Results section -->
            <div class="db-results">
                <h3>Staff Records</h3>
                <!-- LINE 30: Result count -->
                <p class="result-count">Showing <?php echo $count; ?> record<?php echo $count !== 1 ? 's' : ''; ?>.</p>

                <div style="overflow-x:auto;">
                    <table class="results-table">
                        <thead>
                            <tr>
                                <!-- LINE 31: Sortable column headers - click to sort -->
                                <th><?php echo sortLink('School',     'school_name', $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th><?php echo sortLink('Dept',       'dept',        $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th>Title</th>
                                <th><?php echo sortLink('Last Name',  'last_name',   $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th><?php echo sortLink('First Name', 'first_name',  $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th><?php echo sortLink('Position',   'position',    $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th>Address</th>
                                <th><?php echo sortLink('Start',      'start_year',  $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th><?php echo sortLink('Left',       'left_year',   $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th>Notes</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($records)): ?>
                            <!-- LINE 32: No results row -->
                            <tr><td colspan="11" style="text-align:center;padding:20px;color:#888;">
                                No records found matching your search.
                            </td></tr>
                        <?php else: ?>
                            <?php foreach ($records as $r): ?>
                            <!-- LINE 33: Data row for each staff record -->
                            <tr>
                                <td><?php echo htmlspecialchars($r['school_name']); ?></td>
                                <td><?php echo htmlspecialchars($r['dept']);        ?></td>
                                <td><?php echo htmlspecialchars($r['title']);       ?></td>
                                <td><?php echo htmlspecialchars($r['last_name']);   ?></td>
                                <td><?php echo htmlspecialchars($r['first_name']);  ?></td>
                                <td><?php echo htmlspecialchars($r['position']);    ?></td>
                                <td><?php echo htmlspecialchars($r['address']);     ?></td>
                                <td><?php echo htmlspecialchars($r['start_year']);  ?></td>
                                <td><?php echo htmlspecialchars($r['left_year']);   ?></td>
                                <td><?php echo htmlspecialchars($r['notes']);       ?></td>
                                <td style="white-space:nowrap;">
                                    <!-- LINE 34: Edit button - loads this page with ?edit=ID to pre-fill form -->
                                    <a href="page5.php?edit=<?php echo $r['id']; ?>"
                                       style="background:var(--colour-nav-active);color:#fff;padding:3px 8px;border-radius:2px;font-size:0.8em;text-decoration:none;">Edit</a>
                                    <!-- LINE 35: Delete button - posts a DELETE action -->
                                    <form method="POST" action="page5.php" style="display:inline;"
                                          onsubmit="return confirm('Delete this record?');">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                                        <button type="submit"
                                            style="background:var(--colour-accent);color:#fff;border:none;padding:3px 8px;cursor:pointer;border-radius:2px;font-size:0.8em;margin-left:4px;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

<?php
$db->close();
include 'includes/footer.php';
?>


