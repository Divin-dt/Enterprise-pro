<?php
// ============================================================

//
// VARIABLES you can set BEFORE including this file:
//   $page_title  - text shown in the browser tab
//   $active_nav  - which nav button to highlight (1-6)
// ============================================================

// LINE 1: Set default title if none was provided
if (!isset($page_title)) {
    $page_title = 'Marshfield School History';
}

// LINE 2: Set default active nav if none provided
if (!isset($active_nav)) {
    $active_nav = 0;
}

// LINE 3: Array of nav button labels and their page filenames
// INSTRUCTION: To rename a nav button, change the text here
$nav_items = [
    1 => ['label' => 'About',                       'href' => 'Page 1.php'],
    2 => ['label' => 'Chapel Green Board School',   'href' => 'Page 2.php'],
    3 => ['label' => 'Thornton Lane Board School',  'href' => 'Page 3.php'],
    4 => ['label' => 'Marshfield School',           'href' => 'Page 4.php'],
    5 => ['label' => 'Staff Database',              'href' => 'Page 5.php'],
    6 => ['label' => 'Sources Database',            'href' => 'Page 6.php'],
];
?>
<!DOCTYPE html>
<!-- LINE 4: HTML5 document declaration -->
<html lang="en">

<head>
    <!-- LINE 5: Character encoding -->
    <meta charset="UTF-8">
    <!-- LINE 6: Mobile display settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINE 7: Browser tab title - uses the $page_title variable set in each page -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <!-- LINE 8: Link to shared stylesheet - change colours/fonts in Page-css.css -->
    <link rel="stylesheet" href="Page-css.css">
</head>

<body>

    <!-- ============================================================
         HEADER SECTION - the title banner at the top of every page
         ============================================================ -->

    <!-- LINE 9: Header section -->
    <header id="page-header">
        <!-- LINE 10: Main application title - change text here if needed -->
        <h1>Marshfield School History</h1>
        <!-- LINE 11: Subtitle line -->
        <p class="header-subtitle">Bradford Community History Research</p>
    </header>

    <!-- ============================================================
         HEADER IMAGE - the school photograph banner
         ============================================================ -->

    <!-- LINE 12: Header image area -->
    <div id="header-image">
        <?php
        // LINE 13: Check if the school photograph file exists before showing it
      
        if (file_exists('Images/Images/Marshfield_School.jpg')): ?>
            <!-- LINE 14: Show the photo if it exists -->
            <img src="Images/Images/Marshfield_School.jpg" alt="Marshfield School">
        <?php else: ?>
            <!-- LINE 15: Show a placeholder if the photo file is not yet in place -->
            <div class="img-placeholder">
                [ Place school photograph here: Images/Images/Marshfield_School.jpg ]
            </div>
        <?php endif; ?>
    </div>

    
         NAVIGATION BAR - the row of buttons at the top of every page
        

    <!-- LINE 16: Navigation bar -->
    <nav id="nav-bar">
        <?php
        // LINE 17: Loop through nav items and output each button
        foreach ($nav_items as $num => $item):
            // LINE 18: Add 'active' class to the button for the current page
            $class = ($active_nav === $num) ? ' class="active"' : '';
        ?>
            <!-- LINE 19: Nav button - href links to the page file -->
            <a href="<?php echo $item['href']; ?>"<?php echo $class; ?>>
                <?php echo htmlspecialchars($item['label']); ?>
            </a>
        <?php endforeach; ?>
    </nav>

    <!-- ============================================================
         MAIN CONTENT AREA starts here - each page adds its own content
         ============================================================ -->

    <!-- LINE 20: Main content wrapper -->
    <main id="main-content">

