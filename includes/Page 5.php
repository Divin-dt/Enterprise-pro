<?php
// ============================================================
// FILE: Page_5.php  (Page 5 - Staff Database)
// PURPOSE: Search, add, edit, and delete staff records stored in the MySQL 'staff' table.
// REQUIRES: config.php (database connection) and staff.sql (to create the table)
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Staff Database';

// LINE 2: Highlight the Staff Database nav button (button 5)
$active_nav = 5;

// LINE 3: Include database configuration and open connection
require_once 'config.php';
$db = getDB();

// ============================================================
// HANDLE FORM SUBMISSIONS (POST requests)
// PURPOSE: Process add / edit / delete actions from the form buttons
// ============================================================

$message = ''; // LINE 4: Holds feedback text shown after a save or delete action

// LINE 5: Check if this page was submitted via a form (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'save') {
        // LINE 6: Collect and sanitise all form field values
        $id       = intval($_POST['id']          ?? 0);
        $school   = $db->real_escape_string(trim($_POST['school_name'] ?? ''));
        $dept     = $db->real_escape_string(trim($_POST['dept']        ?? ''));
        $title    = $db->real_escape_string(trim($_POST['title']       ?? ''));
        $last     = $db->real_escape_string(trim($_POST['last_name']   ?? ''));
        $first    = $db->real_escape_string(trim($_POST['first_name']  ?? ''));
        $position = $db->real_escape_string(trim($_POST['position']    ?? ''));
        $address  = $db->real_escape_string(trim($_POST['address']     ?? ''));
        $start    = $db->real_escape_string(trim($_POST['start_year']  ?? ''));
        $left     = $db->real_escape_string(trim($_POST['left_year']   ?? ''));
        $notes    = $db->real_escape_string(trim($_POST['notes']       ?? ''));

        // LINE 7: School Name and Last Name are the minimum required fields
        if (empty($school) || empty($last)) {
            $message = '<div class="info-box" style="border-left-color:var(--clr-danger);color:var(--clr-danger);">School Name and Last Name are required.</div>';
        } elseif ($id > 0) {
            // LINE 8: UPDATE an existing record
            $db->query("UPDATE staff SET
                school_name='$school', dept='$dept', title='$title',
                last_name='$last', first_name='$first', position='$position',
                address='$address', start_year='$start', left_year='$left', notes='$notes'
                WHERE id=$id");
            $message = '<div class="info-box">Record updated successfully.</div>';
        } else {
            // LINE 9: INSERT a new record
            $db->query("INSERT INTO staff
                (school_name, dept, title, last_name, first_name, position, address, start_year, left_year, notes)
                VALUES ('$school','$dept','$title','$last','$first','$position','$address','$start','$left','$notes')");
            $message = '<div class="info-box">New record added successfully.</div>';
        }

    } elseif ($action === 'delete') {
        // LINE 10: DELETE a record by its ID
        $id = intval($_POST['id'] ?? 0);
        if ($id > 0) {
            $db->query("DELETE FROM staff WHERE id=$id");
            $message = '<div class="info-box">Record deleted.</div>';
        }
    }
}

// ============================================================
// SEARCH / FILTER
// PURPOSE: Build the SQL WHERE clause from the search form values
// ============================================================

// LINE 11: Read search values from the URL (GET parameters)
$s_school   = trim($_GET['s_school']   ?? '');
$s_dept     = trim($_GET['s_dept']     ?? '');
$s_position = trim($_GET['s_position'] ?? '');
$s_lastname = trim($_GET['s_lastname'] ?? '');
$s_year     = trim($_GET['s_year']     ?? '');

// LINE 12: Build the list of WHERE conditions
$conditions = [];
if ($s_school)   $conditions[] = "school_name LIKE '%" . $db->real_escape_string($s_school)   . "%'";
if ($s_dept)     $conditions[] = "dept = '"             . $db->real_escape_string($s_dept)     . "'";
if ($s_position) $conditions[] = "position = '"         . $db->real_escape_string($s_position) . "'";
if ($s_lastname) $conditions[] = "last_name LIKE '%"    . $db->real_escape_string($s_lastname) . "%'";
if ($s_year)     $conditions[] = "start_year = '"       . $db->real_escape_string($s_year)     . "'";

// LINE 13: Combine conditions into SQL WHERE clause (or empty string if no filters)
$where = $conditions ? 'WHERE ' . implode(' AND ', $conditions) : '';

// LINE 14: Sorting - which column and which direction
$allowed_cols = ['school_name','dept','last_name','first_name','position','start_year','left_year'];
$sort_col = in_array($_GET['sort'] ?? '', $allowed_cols) ? $_GET['sort'] : 'last_name';
$sort_dir = (($_GET['dir'] ?? '') === 'DESC') ? 'DESC' : 'ASC';
$next_dir = ($sort_dir === 'ASC') ? 'DESC' : 'ASC';

// LINE 15: Run the search query and collect results
$sql     = "SELECT * FROM staff $where ORDER BY $sort_col $sort_dir";
$result  = $db->query($sql);
$records = [];
while ($row = $result->fetch_assoc()) {
    $records[] = $row;
}
$count = count($records);

// LINE 16: If an edit was requested, load that record to pre-fill the form
$edit_record = null;
if (isset($_GET['edit'])) {
    $eid = intval($_GET['edit']);
    $er  = $db->query("SELECT * FROM staff WHERE id=$eid");
    if ($er) $edit_record = $er->fetch_assoc();
}

// LINE 17: Include the shared header (outputs HTML head, banner, nav bar)
include 'includes/header.php';

// LINE 18: Helper function - outputs a sortable column heading link
function sortLink($label, $col, $sort_col, $sort_dir, $next_dir, $get_params) {
    $params = array_merge($get_params, ['sort' => $col, 'dir' => ($sort_col === $col ? $next_dir : 'ASC')]);
    $arrow  = ($sort_col === $col) ? ($sort_dir === 'ASC' ? ' ▲' : ' ▼') : ' ⇅';
    return '<a href="Page_5.php?' . http_build_query($params) . '" style="color:inherit;text-decoration:none;">' . $label . $arrow . '</a>';
}
$get_base = array_filter([
    's_school'   => $s_school,
    's_dept'     => $s_dept,
    's_position' => $s_position,
    's_lastname' => $s_lastname,
    's_year'     => $s_year,
]);
?>

        <!-- LINE 19: Subpage heading bar -->
        <div class="subpage-header">Staff Database</div>

        <!-- LINE 20: Centred content wrapper -->
        <div class="content-full">

            <!-- LINE 21: Feedback message (shown after save or delete) -->
            <?php echo $message; ?>

            <!-- LINE 22: Info box explaining the page -->
            <div class="info-box" style="margin-bottom:1.25rem;">
                Staff records from the school logbooks. Use the search fields below to filter records.
                Leave all fields blank to show all records.
            </div>

            <!-- ============================================================
                 LINE 23: SEARCH FORM
                 Uses GET method so the search results URL can be bookmarked
                 ============================================================ -->
            <form method="GET" action="Page_5.php" class="db-search-form">
                <h3>Search Staff Records</h3>
                <div class="search-row">

                    <!-- LINE 24: School Name dropdown -->
                    <div class="search-field">
                        <label for="s_school">School Name</label>
                        <select name="s_school" id="s_school">
                            <option value="">— All Schools —</option>
                            <?php foreach (['Chapel Green Board School','Thornton Lane Board School','Marshfield School'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if ($s_school === $opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- LINE 25: Department dropdown -->
                    <div class="search-field">
                        <label for="s_dept">Department</label>
                        <select name="s_dept" id="s_dept">
                            <option value="">— All —</option>
                            <?php foreach (['Infants','Junior','Senior'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if ($s_dept === $opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- LINE 26: Position dropdown -->
                    <div class="search-field">
                        <label for="s_position">Position</label>
                        <select name="s_position" id="s_position">
                            <option value="">— All —</option>
                            <?php foreach (['Headteacher','Assistant Teacher','Pupil Teacher','Caretaker'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if ($s_position === $opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- LINE 27: Last name text search -->
                    <div class="search-field">
                        <label for="s_lastname">Last Name</label>
                        <input type="text" name="s_lastname" id="s_lastname"
                               value="<?php echo htmlspecialchars($s_lastname); ?>"
                               placeholder="Search last name...">
                    </div>

                    <!-- LINE 28: Start year search -->
                    <div class="search-field">
                        <label for="s_year">Start Year</label>
                        <input type="text" name="s_year" id="s_year"
                               value="<?php echo htmlspecialchars($s_year); ?>"
                               placeholder="e.g. 1905">
                    </div>

                </div>
                <div class="search-row">
                    <!-- LINE 29: Action buttons -->
                    <button type="submit" class="btn-search">&#128269; Search</button>
                    <a href="Page_5.php" class="btn-search btn-cancel" style="text-decoration:none;">&#10005; Clear / Show All</a>
                    <a href="Page_5.php?show_form=1" class="btn-search btn-success" style="text-decoration:none;">&#43; Add Record</a>
                </div>
            </form>

            <!-- ============================================================
                 LINE 30: ADD / EDIT FORM
                 Shown when the user clicks "Add Record" or "Edit" on a row.
                 ============================================================ -->
            <?php if (isset($_GET['show_form']) || $edit_record): ?>
            <form method="POST" action="Page_5.php" class="db-search-form"
                  style="border:2px solid var(--clr-accent);">

                <!-- LINE 31: Hidden fields tell the PHP what action to take -->
                <input type="hidden" name="action" value="save">
                <input type="hidden" name="id" value="<?php echo $edit_record ? $edit_record['id'] : 0; ?>">

                <h3><?php echo $edit_record ? 'Edit Staff Record' : 'Add New Staff Record'; ?></h3>

                <!-- LINE 32: Form fields in a 3-column grid -->
                <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:12px;">
                    <?php
                    // LINE 33: Helper - outputs a text input field
                    $er = $edit_record ?: [];
                    function staffField($name, $label, $er, $placeholder='') {
                        $val = htmlspecialchars($er[$name] ?? '');
                        echo "<div class='search-field'><label>$label</label>";
                        echo "<input type='text' name='$name' value='$val' placeholder='$placeholder'>";
                        echo "</div>";
                    }
                    // LINE 34: Helper - outputs a select dropdown field
                    function staffSelect($name, $label, $options, $er) {
                        $val = $er[$name] ?? '';
                        echo "<div class='search-field'><label>$label</label><select name='$name'><option value=''>— Select —</option>";
                        foreach ($options as $o) {
                            $sel = ($val === $o) ? ' selected' : '';
                            echo "<option value='$o'$sel>$o</option>";
                        }
                        echo "</select></div>";
                    }
                    ?>
                    <?php staffSelect('school_name', 'School Name *', ['Chapel Green Board School','Thornton Lane Board School','Marshfield School'], $er); ?>
                    <?php staffSelect('dept', 'Department', ['Infants','Junior','Senior'], $er); ?>
                    <?php staffField('title', 'Title (Mr/Mrs etc)', $er, 'Mr, Mrs, Miss...'); ?>
                    <?php staffField('last_name', 'Last Name *', $er, 'Surname'); ?>
                    <?php staffField('first_name', 'First Name', $er, 'First name'); ?>
                    <?php staffSelect('position', 'Position', ['Headteacher','Assistant Teacher','Pupil Teacher','Caretaker'], $er); ?>
                    <?php staffField('address', 'Address', $er, 'Address'); ?>
                    <?php staffField('start_year', 'Start Year', $er, 'e.g. 1905'); ?>
                    <?php staffField('left_year', 'Left Year', $er, 'e.g. 1912'); ?>
                    <!-- LINE 35: Notes field spans all 3 columns -->
                    <div class="search-field" style="grid-column: 1 / -1;">
                        <label>Notes</label>
                        <input type="text" name="notes"
                               value="<?php echo htmlspecialchars($er['notes'] ?? ''); ?>"
                               placeholder="Any additional notes">
                    </div>
                </div>

                <div class="search-row" style="margin-top:12px;">
                    <button type="submit" class="btn-search btn-success">&#10003; Save Record</button>
                    <a href="Page_5.php" class="btn-search btn-cancel" style="text-decoration:none;">&#10005; Cancel</a>
                </div>
            </form>
            <?php endif; ?>

            <!-- ============================================================
                 LINE 36: RESULTS TABLE
                 ============================================================ -->
            <div class="db-results">
                <h3>Staff Records</h3>
                <!-- LINE 37: Result count -->
                <p class="result-count">
                    Showing <?php echo $count; ?> record<?php echo $count !== 1 ? 's' : ''; ?>.
                </p>

                <!-- LINE 38: Horizontal scroll wrapper - needed on small screens -->
                <div style="overflow-x: auto;">
                    <table class="results-table">
                        <thead>
                            <tr>
                                <!-- LINE 39: Sortable column headers - click to sort ascending/descending -->
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
                            <!-- LINE 40: No results message -->
                            <tr>
                                <td colspan="11" style="text-align:center; padding:20px; color:#888;">
                                    No records found matching your search.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($records as $r): ?>
                            <!-- LINE 41: One data row per staff record -->
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
                                <td style="white-space: nowrap;">
                                    <!-- LINE 42: Edit button - reloads the page with the record in the form -->
                                    <a href="Page_5.php?edit=<?php echo $r['id']; ?>" class="btn-edit">Edit</a>
                                    <!-- LINE 43: Delete button - submits a POST to delete this record -->
                                    <form method="POST" action="Page_5.php" style="display:inline;"
                                          onsubmit="return confirm('Delete this record? This cannot be undone.');">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                                        <button type="submit" class="btn-delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div><!-- LINE 44: End scroll wrapper -->
            </div><!-- LINE 45: End results section -->

        </div><!-- LINE 46: End content-full -->

<?php
// LINE 47: Close the database connection
$db->close();

// LINE 48: Include the shared footer
include 'includes/footer.php';
?>
