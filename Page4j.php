<?php
// ============================================================
// FILE: Page4j.php
// PURPOSE: Admission Register — Juniors August 1911 to July 1917 - page index table linking to document images.
// PARENT PAGE: Page_4.php
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Admission Register — Juniors August 1911 to July 1917';

// LINE 2: Highlight the Marshfield School nav button (button 4)
$active_nav = 4;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- PAGE Page4j - MAIN CONTENT -->

    <!-- LINE 4: Centred content wrapper -->
    <div class="content-full">

        <div class="table-section">

            <!-- LINE 5: Section heading
                 INSTRUCTION: To change the heading, edit the text inside <h2> below -->
            <h2>Admission Register — Juniors August 1911 to July 1917</h2>

            <!-- LINE 6: Info box -->
            <div class="info-box">
                Click any page number to view it. Images are in:
                <code>Images/Admission_Registers/Juniors_1911-1917/</code><br>
                — Add hyperlinks using the Instruction Manual.
            </div>

            <!-- LINE 7: Page index table
                 INSTRUCTION: Replace each # with the correct viewer link.
                 Format: viewer.php?file=Images/Admission_Registers/Juniors_1911-1917/Page_01.jpg&back=Page4j.php
                 Add more <tr> rows of 10 cells as needed. -->
            <table class="page-table">
                <tbody>
                        <tr><td><a href="#">Title page</a></td><td><a href="#">Index A B</a></td><td><a href="#">Index B C</a></td><td><a href="#">Index D E F G</a></td><td><a href="#">Index H I J</a></td><td><a href="#">Index K L M</a></td><td><a href="#">Index N O P</a></td><td><a href="#">Index R S</a></td><td><a href="#">Index T U V</a></td><td><a href="#">Index W Y</a></td></tr>
                        <tr><td><a href="#">1911 (1)</a></td><td><a href="#">1911 (2)</a></td><td><a href="#">1911 (3)</a></td><td><a href="#">1911 (4)</a></td><td><a href="#">1911 (5)</a></td><td><a href="#">1912 (1)</a></td><td><a href="#">1912 (2)</a></td><td><a href="#">1912 (3)</a></td><td><a href="#">1912 (4)</a></td><td><a href="#">1912 (5)</a></td></tr>
                    </tbody>
            </table>

            <!-- LINE 8: Back navigation buttons -->
            <div class="page-nav">
                <a href="Page_4.php">&#8592; Back to Marshfield School</a>
                <a href="Page_1.php">&#8962; Home</a>
            </div>

        </div>

    </div><!-- LINE 9: End of content-full -->

<?php
// LINE 10: Include shared footer
include 'footer.php';
?>
