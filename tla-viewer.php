<?php
// ============================================================
// FILE: tla-viewer.php
// PURPOSE: Displays pages of the Thornton Lane Admission Register index sections.
//          Called from Page_3a.php with ?index=N (1-9 = alphabetical sections)
// ============================================================

// LINE 1: Read the requested index section from the URL, default to 1
$currentIndex = isset($_GET['index']) ? (int)$_GET['index'] : 1;

// LINE 2: First and last index section numbers
$firstIndex = 1;
$lastIndex  = 9;

// LINE 3: Path to the admission register images
// INSTRUCTION: Change this path if your images are stored in a different folder
// NOTE: Folder name must have NO spaces - rename it on disk if needed
$indexPath = "Images/Admission_Registers/Thornton_Lane_1894-1901/";

// LINE 4: Map each index number to its image filename
// INSTRUCTION: Change the filenames if your images are named differently
$indexFiles = [
    1 => "001Index A,B.jpg",
    2 => "001Index B,C.jpg",
    3 => "001Index D,E,F,G.jpg",
    4 => "001Index H,I,J.jpg",
    5 => "001Index K,L,M.jpg",
    6 => "001Index N,O,P.jpg",
    7 => "001Index R,S.jpg",
    8 => "001Index T,U,V.jpg",
    9 => "001Index W,Y.jpg",
];

// LINE 5: Map each index number to its display label
$indexLabels = [
    1 => "Index A to B",
    2 => "Index B to C",
    3 => "Index D to G",
    4 => "Index H to J",
    5 => "Index K to M",
    6 => "Index N to P",
    7 => "Index R to S",
    8 => "Index T to U",
    9 => "Index W to Y",
];

// LINE 6: Clamp index so it never goes out of range
if ($currentIndex < $firstIndex) $currentIndex = $firstIndex;
if ($currentIndex > $lastIndex)  $currentIndex = $lastIndex;

// LINE 7: Previous and next index numbers for nav buttons
$previousIndex = $currentIndex - 1;
$nextIndex     = $currentIndex + 1;

// LINE 8: Get the filename and label for the current section
$indexFile  = $indexFiles[$currentIndex];
$indexLabel = $indexLabels[$currentIndex];

// LINE 9: Set page title and active nav
$page_title = "Marshfield School History - Thornton Lane Admission Register";
$active_nav = 3;  // Highlight the Thornton Lane nav button

// LINE 10: Include the shared header
include 'header.php';
?>

    <!-- ============================================================
         TLA-VIEWER - MAIN CONTENT
         ============================================================ -->
    <div class="content-full">

        <!-- LINE 11: Top navigation buttons -->
        <div class="navigation">
            <!-- LINE 12: Back to the index page -->
            <a href="Page_3a.php">&#8962; Back to Register Index</a>

            <!-- LINE 13: First section button -->
            <a href="tla-viewer.php?index=<?php echo $firstIndex; ?>">&#8676; First</a>

            <!-- LINE 14: Previous section button -->
            <?php if ($currentIndex > $firstIndex): ?>
                <a href="tla-viewer.php?index=<?php echo $previousIndex; ?>">&#8592; Previous</a>
            <?php else: ?>
                <a class="disabled" style="opacity:0.4; cursor:default;">&#8592; Previous</a>
            <?php endif; ?>

            <!-- LINE 15: Next section button -->
            <?php if ($currentIndex < $lastIndex): ?>
                <a href="tla-viewer.php?index=<?php echo $nextIndex; ?>">Next &#8594;</a>
            <?php else: ?>
                <a class="disabled" style="opacity:0.4; cursor:default;">Next &#8594;</a>
            <?php endif; ?>

            <!-- LINE 16: Last section button -->
            <a href="tla-viewer.php?index=<?php echo $lastIndex; ?>">Last &#8677;</a>
        </div>

        <!-- LINE 17: Section label e.g. "Index A to B" -->
        <h3 style="text-align:center; font-family:var(--ff-heading); color:var(--clr-accent);
                   margin: 1rem 0 0.75rem;">
            Thornton Lane Admission Register &mdash; <?php echo htmlspecialchars($indexLabel); ?>
        </h3>

        <!-- LINE 18: The register page image -->
        <div class="image-display">
            <img src="<?php echo htmlspecialchars($indexPath . $indexFile); ?>"
                 alt="<?php echo htmlspecialchars($indexLabel); ?>">
        </div>

        <!-- LINE 19: Bottom navigation (same as top) -->
        <div class="navigation" style="margin-top: 1.5rem;">
            <a href="Page_3a.php">&#8962; Back to Register Index</a>
            <a href="tla-viewer.php?index=<?php echo $firstIndex; ?>">&#8676; First</a>

            <?php if ($currentIndex > $firstIndex): ?>
                <a href="tla-viewer.php?index=<?php echo $previousIndex; ?>">&#8592; Previous</a>
            <?php else: ?>
                <a class="disabled" style="opacity:0.4; cursor:default;">&#8592; Previous</a>
            <?php endif; ?>

            <?php if ($currentIndex < $lastIndex): ?>
                <a href="tla-viewer.php?index=<?php echo $nextIndex; ?>">Next &#8594;</a>
            <?php else: ?>
                <a class="disabled" style="opacity:0.4; cursor:default;">Next &#8594;</a>
            <?php endif; ?>

            <a href="tla-viewer.php?index=<?php echo $lastIndex; ?>">Last &#8677;</a>
        </div>

    </div><!-- End content-full -->

<?php
// LINE 20: Include shared footer
include 'footer.php';
?>