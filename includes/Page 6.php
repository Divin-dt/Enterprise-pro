<?php
// ============================================================
// FILE: Page_6.php  (Page 6 - Sources Database)
// PURPOSE: Search, add, edit, and delete source records stored in the MySQL 'sources' table.
//          Each source has a hyperlink to its file in the Images folder.
// REQUIRES: config.php (database connection) and sources.sql (to create the table)
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Sources Database';

// LINE 2: Highlight the Sources Database nav button (button 6)
$active_nav = 6;

// LINE 3: Include database configuration and open connection
require_once 'config.php';
$db = getDB();

// ============================================================
// HANDLE FORM SUBMISSIONS (POST requests)
// ============================================================

$message = ''; // LINE 4: Feedback message shown after save or delete

// LINE 5: Check if a form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'save') {
        // LINE 6: Collect and sanitise form values
        $id    = intval($_POST['id']          ?? 0);
        $name  = $db->real_escape_string(trim($_POST['source_name'] ?? ''));
        $type  = $db->real_escape_string(trim($_POST['source_type'] ?? ''));
        $school = $db->real_escape_string(trim($_POST['school']     ?? ''));
        $dept  = $db->real_escape_string(trim($_POST['dept']        ?? ''));
        $notes = $db->real_escape_string(trim($_POST['notes']       ?? ''));
        $link  = $db->real_escape_string(trim($_POST['link']        ?? ''));

        // LINE 7: Source Name, Type, and School are required
        if (empty($name) || empty($type) || empty($school)) {
            $message = '<div class="info-box" style="border-left-color:var(--clr-danger);color:var(--clr-danger);">Source Name, Type, and School are required.</div>';
        } elseif ($id > 0) {
            // LINE 8: UPDATE existing record
            $db->query("UPDATE sources SET
                source_name='$name', source_type='$type', school='$school',
                dept='$dept', notes='$notes', link='$link'
                WHERE id=$id");
            $message = '<div class="info-box">Source updated successfully.</div>';
        } else {
            // LINE 9: INSERT new record
            $db->query("INSERT INTO sources (source_name, source_type, school, dept, notes, link)
                VALUES ('$name','$type','$school','$dept','$notes','$link')");
            $message = '<div class="info-box">New source added successfully.</div>';
        }

    } elseif ($action === 'delete') {
        // LINE 10: DELETE a record
        $id = intval($_POST['id'] ?? 0);
        if ($id > 0) {
            $db->query("DELETE FROM sources WHERE id=$id");
            $message = '<div class="info-box">Source deleted.</div>';
        }
    }
}

// ============================================================
// SEARCH / FILTER
// ============================================================

// LINE 11: Read search values from URL
$s_school = trim($_GET['s_school'] ?? '');
$s_type   = trim($_GET['s_type']   ?? '');
$s_name   = trim($_GET['s_name']   ?? '');

// LINE 12: Build WHERE conditions
$conditions = [];
if ($s_school) $conditions[] = "school LIKE '%"      . $db->real_escape_string($s_school) . "%'";
if ($s_type)   $conditions[] = "source_type = '"     . $db->real_escape_string($s_type)   . "'";
if ($s_name)   $conditions[] = "source_name LIKE '%" . $db->real_escape_string($s_name)   . "%'";

$where = $conditions ? 'WHERE ' . implode(' AND ', $conditions) : '';

// LINE 13: Sorting
$allowed_cols = ['source_name','source_type','school','dept'];
$sort_col = in_array($_GET['sort'] ?? '', $allowed_cols) ? $_GET['sort'] : 'source_name';
$sort_dir = (($_GET['dir'] ?? '') === 'DESC') ? 'DESC' : 'ASC';
$next_dir = ($sort_dir === 'ASC') ? 'DESC' : 'ASC';

// LINE 14: Run query
$result  = $db->query("SELECT * FROM sources $where ORDER BY $sort_col $sort_dir");
$records = [];
while ($row = $result->fetch_assoc()) $records[] = $row;
$count = count($records);

// LINE 15: Load edit record if requested
$edit_record = null;
if (isset($_GET['edit'])) {
    $eid = intval($_GET['edit']);
    $er  = $db->query("SELECT * FROM sources WHERE id=$eid");
    if ($er) $edit_record = $er->fetch_assoc();
}

// LINE 16: Include shared header
include 'includes/header.php';

// LINE 17: Sort link helper
function sortLink6($label, $col, $sort_col, $sort_dir, $next_dir, $get_params) {
    $params = array_merge($get_params, ['sort' => $col, 'dir' => ($sort_col === $col ? $next_dir : 'ASC')]);
    $arrow  = ($sort_col === $col) ? ($sort_dir === 'ASC' ? ' ▲' : ' ▼') : ' ⇅';
    return '<a href="Page_6.php?' . http_build_query($params) . '" style="color:inherit;text-decoration:none;">' . $label . $arrow . '</a>';
}
$get_base = array_filter(['s_school' => $s_school, 's_type' => $s_type, 's_name' => $s_name]);
?>

        <!-- LINE 18: Subpage heading bar -->
        <div class="subpage-header">Sources Database</div>

        <!-- LINE 19: Centred content wrapper -->
        <div class="content-full">

            <!-- LINE 20: Feedback message -->
            <?php echo $message; ?>

            <!-- LINE 21: Info box -->
            <div class="info-box" style="margin-bottom:1.25rem;">
                All available source documents for the project. Each record can include a link to open
                the document from the Images folder. Use the search fields to filter. Leave blank to show all.
            </div>

            <!-- ============================================================
                 LINE 22: SEARCH FORM
                 ============================================================ -->
            <form method="GET" action="Page_6.php" class="db-search-form">
                <h3>Search Sources</h3>
                <div class="search-row">

                    <!-- LINE 23: School dropdown -->
                    <div class="search-field">
                        <label for="s_school">School</label>
                        <select name="s_school" id="s_school">
                            <option value="">— All Schools —</option>
                            <?php foreach (['Chapel Green Board School','Thornton Lane Board School','Marshfield School','All Schools'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if ($s_school === $opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- LINE 24: Source Type dropdown -->
                    <div class="search-field">
                        <label for="s_type">Source Type</label>
                        <select name="s_type" id="s_type">
                            <option value="">— All Types —</option>
                            <?php foreach (['Logbook','Admission Register','Punishment Book','Booklet','Document','Map / Plan','Newspaper','Photograph'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if ($s_type === $opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- LINE 25: Source name text search -->
                    <div class="search-field">
                        <label for="s_name">Source Name</label>
                        <input type="text" name="s_name" id="s_name"
                               value="<?php echo htmlspecialchars($s_name); ?>"
                               placeholder="Search source name...">
                    </div>

                </div>
                <div class="search-row">
                    <button type="submit" class="btn-search">&#128269; Search</button>
                    <a href="Page_6.php" class="btn-search btn-cancel" style="text-decoration:none;">&#10005; Clear / Show All</a>
                    <a href="Page_6.php?show_form=1" class="btn-search btn-success" style="text-decoration:none;">&#43; Add Source</a>
                </div>
            </form>

            <!-- ============================================================
                 LINE 26: ADD / EDIT FORM
                 ============================================================ -->
            <?php if (isset($_GET['show_form']) || $edit_record): ?>
            <form method="POST" action="Page_6.php" class="db-search-form"
                  style="border:2px solid var(--clr-accent);">
                <input type="hidden" name="action" value="save">
                <input type="hidden" name="id" value="<?php echo $edit_record ? $edit_record['id'] : 0; ?>">
                <h3><?php echo $edit_record ? 'Edit Source' : 'Add New Source'; ?></h3>
                <?php $er = $edit_record ?: []; ?>

                <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:12px;">

                    <!-- LINE 27: Source name field -->
                    <div class="search-field">
                        <label>Source Name *</label>
                        <input type="text" name="source_name"
                               value="<?php echo htmlspecialchars($er['source_name'] ?? ''); ?>"
                               placeholder="e.g. Infants Logbook 1905–1939">
                    </div>

                    <!-- LINE 28: Source type dropdown -->
                    <div class="search-field">
                        <label>Source Type *</label>
                        <select name="source_type">
                            <option value="">— Select —</option>
                            <?php foreach (['Logbook','Admission Register','Punishment Book','Booklet','Document','Map / Plan','Newspaper','Photograph'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if (($er['source_type'] ?? '') === $opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- LINE 29: School dropdown -->
                    <div class="search-field">
                        <label>School *</label>
                        <select name="school">
                            <option value="">— Select —</option>
                            <?php foreach (['Chapel Green Board School','Thornton Lane Board School','Marshfield School','All Schools'] as $opt): ?>
                            <option value="<?php echo $opt; ?>" <?php if (($er['school'] ?? '') === $opt) echo 'selected'; ?>>
                                <?php echo $opt; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- LINE 30: Department field -->
                    <div class="search-field">
                        <label>Department</label>
                        <input type="text" name="dept"
                               value="<?php echo htmlspecialchars($er['dept'] ?? ''); ?>"
                               placeholder="e.g. Infants, Junior">
                    </div>

                    <!-- LINE 31: Notes field - spans 2 columns -->
                    <div class="search-field" style="grid-column: span 2;">
                        <label>Notes</label>
                        <input type="text" name="notes"
                               value="<?php echo htmlspecialchars($er['notes'] ?? ''); ?>"
                               placeholder="Any additional notes">
                    </div>

                    <!-- LINE 32: Hyperlink field - path to the file in the Images folder
                         INSTRUCTION: Enter the path relative to the project root
                         Example: Images/Log_Books/Infants_1905-1939.pdf -->
                    <div class="search-field" style="grid-column: 1 / -1;">
                        <label>Hyperlink (path to file in Images folder — e.g. Images/Log_Books/Infants_1905-1939.pdf)</label>
                        <input type="text" name="link"
                               value="<?php echo htmlspecialchars($er['link'] ?? ''); ?>"
                               placeholder="Images/...">
                    </div>

                </div>

                <div class="search-row" style="margin-top:12px;">
                    <button type="submit" class="btn-search btn-success">&#10003; Save Source</button>
                    <a href="Page_6.php" class="btn-search btn-cancel" style="text-decoration:none;">&#10005; Cancel</a>
                </div>
            </form>
            <?php endif; ?>

            <!-- ============================================================
                 LINE 33: RESULTS TABLE
                 ============================================================ -->
            <div class="db-results">
                <h3>Sources</h3>
                <p class="result-count">
                    Showing <?php echo $count; ?> source<?php echo $count !== 1 ? 's' : ''; ?>.
                </p>
                <div style="overflow-x: auto;">
                    <table class="results-table">
                        <thead>
                            <tr>
                                <!-- LINE 34: Sortable headers -->
                                <th><?php echo sortLink6('Source Name', 'source_name', $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th><?php echo sortLink6('Type',        'source_type', $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th><?php echo sortLink6('School',      'school',      $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th><?php echo sortLink6('Dept',        'dept',        $sort_col, $sort_dir, $next_dir, $get_base); ?></th>
                                <th>Notes</th>
                                <th>View Document</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($records)): ?>
                            <tr>
                                <td colspan="7" style="text-align:center; padding:20px; color:#888;">
                                    No sources found.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($records as $r): ?>
                            <tr>
                                <td><strong><?php echo htmlspecialchars($r['source_name']); ?></strong></td>
                                <td><?php echo htmlspecialchars($r['source_type']); ?></td>
                                <td><?php echo htmlspecialchars($r['school']); ?></td>
                                <td><?php echo htmlspecialchars($r['dept']); ?></td>
                                <td><?php echo htmlspecialchars($r['notes']); ?></td>
                                <td>
                                    <?php if (!empty($r['link'])): ?>
                                    <!-- LINE 35: Document link - opens via viewer.php for security -->
                                    <a href="viewer.php?file=<?php echo urlencode($r['link']); ?>&title=<?php echo urlencode($r['source_name']); ?>&back=Page_6.php">
                                        &#128196; Open Document
                                    </a>
                                    <?php else: ?>
                                    <em style="color:#888;">No link set</em>
                                    <?php endif; ?>
                                </td>
                                <td style="white-space: nowrap;">
                                    <!-- LINE 36: Edit button -->
                                    <a href="Page_6.php?edit=<?php echo $r['id']; ?>" class="btn-edit">Edit</a>
                                    <!-- LINE 37: Delete button -->
                                    <form method="POST" action="Page_6.php" style="display:inline;"
                                          onsubmit="return confirm('Delete this source? This cannot be undone.');">
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
                </div><!-- End scroll wrapper -->
            </div><!-- End results section -->

        </div><!-- LINE 38: End content-full -->

<?php
// LINE 39: Close the database connection
$db->close();

// LINE 40: Include shared footer
include 'includes/footer.php';
?>
