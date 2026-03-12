<?php
// ============================================================
// FILE: ahs-viewer.php
// PURPOSE: Displays pages of the 'A Historical Sketch' booklet one at a time.
//          Called from Page_1a.php with ?page=N (0 = front cover, 1-28 = pages)
// ============================================================

// LINE 1: Read the requested page number from the URL, default to 0 (front cover)
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 0;

// LINE 2: Set the first and last page numbers
$firstPage = 0;   // 0 = front cover
$lastPage  = 28;  // INSTRUCTION: Change this number if your booklet has more or fewer pages

// LINE 3: Path to the booklet images folder
// INSTRUCTION: If your images are in a different folder, change this path
$imagePath = "Images/Booklets/Historical_Sketch/";

// LINE 4: Clamp page number so it can never go below 0 or above the last page
if ($currentPage < $firstPage) $currentPage = $firstPage;
if ($currentPage > $lastPage)  $currentPage = $lastPage;

// LINE 5: Calculate previous and next page numbers for the nav buttons
$previousPage = $currentPage - 1;
$nextPage     = $currentPage + 1;

// LINE 6: Work out the image filename for the current page
// INSTRUCTION: Change the filenames below if your images are named differently
if ($currentPage === 0) {
    $imageFile = "Front cover.jpg";   // INSTRUCTION: Change if your cover file is named differently
    $pageLabel = "Front Cover";
} else {
    $imageFile = "Page " . $currentPage . ".jpg";  // e.g. "Page 1.jpg", "Page 2.jpg" etc.
    $pageLabel = "Page " . $currentPage . " of " . $lastPage;
}

// LINE 7: Set page title and active nav for the header
$page_title = "Marshfield School History - A Historical Sketch";
$active_nav = 1;  // Highlight the About button (this viewer is accessed from Page 1a)

// LINE 8: Include the shared header (banner, nav bar etc.)
include 'header.php';
?>

    <!-- ============================================================
         AHS-VIEWER - MAIN CONTENT
         ============================================================ -->
    <div class="content-full">

        <!-- LINE 9: Top navigation buttons (Previous / Next etc.) -->
        <div class="navigation">
            <!-- LINE 10: Back to booklet index -->
            <a href="Page_1a.php">&#8962; Back to Booklet Index</a>

            <!-- LINE 11: First Page button -->
            <a href="ahs-viewer.php?page=<?php echo $firstPage; ?>">&#8676; First Page</a>

            <!-- LINE 12: Previous Page button - greyed out on first page -->
            <?php if ($currentPage > $firstPage): ?>
                <a href="ahs-viewer.php?page=<?php echo $previousPage; ?>">&#8592; Previous Page</a>
            <?php else: ?>
                <a class="disabled" style="opacity:0.4; cursor:default;">&#8592; Previous Page</a>
            <?php endif; ?>

            <!-- LINE 13: Next Page button - greyed out on last page -->
            <?php if ($currentPage < $lastPage): ?>
                <a href="ahs-viewer.php?page=<?php echo $nextPage; ?>">Next Page &#8594;</a>
            <?php else: ?>
                <a class="disabled" style="opacity:0.4; cursor:default;">Next Page &#8594;</a>
            <?php endif; ?>

            <!-- LINE 14: Last Page button -->
            <a href="ahs-viewer.php?page=<?php echo $lastPage; ?>">Last Page &#8677;</a>
        </div>

        <!-- LINE 15: Current page label e.g. "Front Cover" or "Page 3 of 28" -->
        <h3 style="text-align:center; font-family:var(--ff-heading); color:var(--clr-accent);
                   margin: 1rem 0 0.75rem;">
            A Historical Sketch &mdash; <?php echo htmlspecialchars($pageLabel); ?>
        </h3>

        <!-- LINE 16: The booklet page image -->
        <div class="image-display">
            <img src="<?php echo htmlspecialchars($imagePath . $imageFile); ?>"
                 alt="<?php echo htmlspecialchars($pageLabel); ?>">
        </div>

        <!-- LINE 17: Bottom navigation buttons (same as top) -->
        <div class="navigation" style="margin-top: 1.5rem;">
            <a href="Page_1a.php">&#8962; Back to Booklet Index</a>
            <a href="ahs-viewer.php?page=<?php echo $firstPage; ?>">&#8676; First Page</a>

            <?php if ($currentPage > $firstPage): ?>
                <a href="ahs-viewer.php?page=<?php echo $previousPage; ?>">&#8592; Previous Page</a>
            <?php else: ?>
                <a class="disabled" style="opacity:0.4; cursor:default;">&#8592; Previous Page</a>
            <?php endif; ?>

            <?php if ($currentPage < $lastPage): ?>
                <a href="ahs-viewer.php?page=<?php echo $nextPage; ?>">Next Page &#8594;</a>
            <?php else: ?>
                <a class="disabled" style="opacity:0.4; cursor:default;">Next Page &#8594;</a>
            <?php endif; ?>

            <a href="ahs-viewer.php?page=<?php echo $lastPage; ?>">Last Page &#8677;</a>
        </div>

    </div><!-- End content-full -->

<?php
// LINE 18: Include shared footer
include 'footer.php';
?>