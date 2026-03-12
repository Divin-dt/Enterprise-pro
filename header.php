<?php
// ============================================================
// FILE: header.php
// PURPOSE: Shared page header - included at the TOP of every page with:
//          include 'header.php';
//
// VARIABLES you can set BEFORE including this file:
//   $page_title  - text shown in the browser tab (optional)
//   $active_nav  - which nav button to highlight: 1=About, 2=Chapel Green,
//                  3=Thornton Lane, 4=Marshfield, 5=Staff DB, 6=Sources DB
// ============================================================

// LINE 1: Set default title if none was provided by the calling page
if (!isset($page_title)) {
    $page_title = 'Marshfield School History';
}

// LINE 2: Set default active nav if none provided
if (!isset($active_nav)) {
    $active_nav = 0;
}
?>
<!DOCTYPE html>
<!-- LINE 3: HTML5 document declaration -->
<html lang="en">

<head>
    <!-- LINE 4: Character encoding -->
    <meta charset="UTF-8">
    <!-- LINE 5: Mobile display settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINE 6: Browser tab title -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <!-- LINE 7: Master stylesheet - all styling is in style.css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ============================================================
         LINE 8: HEADER BANNER
         INSTRUCTION: To change the title text, edit the <h1> and <p> below
         ============================================================ -->
    <header id="page-header">
        <!-- LINE 9: Main title -->
        <h1>Marshfield School History</h1>
        <!-- LINE 10: Subtitle -->
        <p class="header-subtitle">Bradford Community History Research</p>
    </header>

    <!-- ============================================================
         LINE 11: HEADER IMAGE
         INSTRUCTION: Place the school photo at: Images/Images/Marshfield_School.jpg
         ============================================================ -->
    <div id="header-image">
        <?php if (file_exists('Images/Images/Marshfield_School.jpg')): ?>
            <!-- LINE 12: School photograph -->
            <img src="Images/Images/Marshfield_School.jpg" alt="Marshfield School">
        <?php else: ?>
            <!-- LINE 13: Placeholder shown until the photo is in place -->
            <div class="img-placeholder">
                [ School photograph not found &mdash; place image at: Images/Images/Marshfield_School.jpg ]
            </div>
        <?php endif; ?>
    </div>

    <!-- ============================================================
         LINE 14: NAVIGATION BAR
         INSTRUCTION: To rename a button, change the text inside its <a> tag below.
         INSTRUCTION: To change where a button links, change its href="..." value.
         The active (current) page button is highlighted automatically using $active_nav.
         ============================================================ -->
    <nav id="nav-bar">
        <!-- LINE 15: About button (nav button 1) -->
        <a href="Page_1.php"<?php if ($active_nav === 1) echo ' class="active"'; ?>>About</a>

        <!-- LINE 16: Chapel Green Board School button (nav button 2) -->
        <a href="Page_2.php"<?php if ($active_nav === 2) echo ' class="active"'; ?>>Chapel Green Board School</a>

        <!-- LINE 17: Thornton Lane Board School button (nav button 3) -->
        <a href="Page_3.php"<?php if ($active_nav === 3) echo ' class="active"'; ?>>Thornton Lane Board School</a>

        <!-- LINE 18: Marshfield School button (nav button 4) -->
        <a href="Page_4.php"<?php if ($active_nav === 4) echo ' class="active"'; ?>>Marshfield School</a>

        <!-- LINE 19: Staff Database button (nav button 5) -->
        <a href="Page_5.php"<?php if ($active_nav === 5) echo ' class="active"'; ?>>Staff Database</a>

        <!-- LINE 20: Sources Database button (nav button 6) -->
        <a href="Page_6.php"<?php if ($active_nav === 6) echo ' class="active"'; ?>>Sources Database</a>
    </nav>

    <!-- ============================================================
         LINE 21: MAIN CONTENT AREA
         Each page file puts its own content here.
         This <main> tag is CLOSED in footer.php
         ============================================================ -->
    <main id="main-content">
