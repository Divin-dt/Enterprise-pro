<?php
// ============================================================
// FILE: Page_3a.php  (Page 3a - Thornton Lane Admission Register Jan 1894 - Feb 1901)
// PURPOSE: Index grid linking to pages of the Thornton Lane Admission Register.
// PARENT PAGE: Page_3.php
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Thornton Lane Admission Register';

// LINE 2: Highlight Thornton Lane nav button (button 3)
$active_nav = 3;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- PAGE 3a - MAIN CONTENT -->

    <!-- LINE 4: Centred content wrapper -->
    <div class="content-full">

        <div class="table-section">

            <!-- LINE 5: Section heading -->
            <h2>Thornton Lane Admission Register: January 1894 – February 1901</h2>

            <!-- LINE 6: Info box -->
            <div class="info-box">
                Click an index letter range to view that section, or click a page number to open that page.
                Images are in: <code>Images/Admission_Registers/Thornton_Lane_1894-1901/</code>
            </div>

            <!-- LINE 7: Alphabetical index grid using the tla-grid class -->
            <div class="tla-grid">
                <!-- LINE 8: Alphabetical index links - each opens a section of the register via the viewer
                     INSTRUCTION: Replace tla-viewer.php?index=N links when images are ready -->
                <a href="tla-viewer.php?index=1">Index A–B</a>
                <a href="tla-viewer.php?index=2">Index B–C</a>
                <a href="tla-viewer.php?index=3">Index D–G</a>
                <a href="tla-viewer.php?index=4">Index H–J</a>
                <a href="tla-viewer.php?index=5">Index K–M</a>
                <a href="tla-viewer.php?index=6">Index N–P</a>
                <a href="tla-viewer.php?index=7">Index R–S</a>
                <a href="tla-viewer.php?index=8">Index T–U</a>
                <a href="tla-viewer.php?index=9">Index W–Y</a>
                <a href="#">Index</a><!-- INSTRUCTION: Replace # when full index image is ready -->

                <?php
                // LINE 9: Generate page number links 1 to 33 automatically
                // INSTRUCTION: Replace each # with the correct viewer link when images are ready
                // Format: tla-viewer.php?page=N
                for ($i = 1; $i <= 33; $i++) {
                    echo "<a href=\"#\">Page $i</a>";
                }
                ?>
            </div>

            <!-- LINE 10: Back navigation -->
            <div class="page-nav" style="margin-top: 1.25rem;">
                <a href="Page_3.php">&#8592; Back to Thornton Lane Board School</a>
                <a href="Page_1.php">&#8962; Home</a>
            </div>

        </div>

    </div><!-- LINE 11: End of content-full -->

<?php
// LINE 12: Include shared footer
include 'footer.php';
?>
