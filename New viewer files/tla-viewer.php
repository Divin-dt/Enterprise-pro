<?php
// ============================================================
// FILE: tla-viewer.php
// PURPOSE: Displays pages of the Thornton Lane Admission Register index sections.
//          Called from Page_3a.php with ?index=N (1-9 = alphabetical sections)
// ============================================================

require_once 'ViewerHelper.php';

$requested  = isset($_GET['index']) ? (int)$_GET['index'] : 1;
$viewer     = new ViewerHelper(1, 9, $requested);

$currentIndex  = $viewer->getCurrent();
$previousIndex = $viewer->getPrevious();
$nextIndex     = $viewer->getNext();
$firstIndex    = $viewer->getFirst();
$lastIndex     = $viewer->getLast();
$indexFile     = $viewer->getTLAImageFile();
$indexLabel    = $viewer->getTLALabel();

// INSTRUCTION: Change this path if your images are stored in a different folder
// NOTE: Folder name must have NO spaces - rename it on disk if needed
$indexPath = "Images\Admission_Registers\Thornton_ Lane_1894-1901/";

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