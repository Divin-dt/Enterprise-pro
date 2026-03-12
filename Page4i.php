<?php
// ============================================================
// FILE: Page4i.php
// PURPOSE: Admission Register — Juniors April 1906 to July 1911 - page index table linking to document images.
// PARENT PAGE: Page_4.php
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Admission Register — Juniors April 1906 to July 1911';

// LINE 2: Highlight the Marshfield School nav button (button 4)
$active_nav = 4;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- PAGE Page4i - MAIN CONTENT -->

    <!-- LINE 4: Centred content wrapper -->
    <div class="content-full">

        <div class="table-section">

            <!-- LINE 5: Section heading
                 INSTRUCTION: To change the heading, edit the text inside <h2> below -->
            <h2>Admission Register — Juniors April 1906 to July 1911</h2>

            <!-- LINE 6: Info box -->
            <div class="info-box">
                Click any page number to view it. Images are in:
                <code>Images/Admission_Registers/Juniors_1906-1911/</code><br>
                — Add hyperlinks using the Instruction Manual.
            </div>

            <!-- LINE 7: Page index table
                 INSTRUCTION: Replace each # with the correct viewer link.
                 Format: viewer.php?file=Images/Admission_Registers/Juniors_1906-1911/Page_01.jpg&back=Page4i.php
                 Add more <tr> rows of 10 cells as needed. -->
            <table class="page-table">
                <tbody>
                        <tr><td><a href="#">Index A B C</a></td><td><a href="#">Index B C</a></td><td><a href="#">Index D E F G</a></td><td><a href="#">Index H I J</a></td><td><a href="#">Index K L M</a></td><td><a href="#">Index N O P</a></td><td><a href="#">Index Q R S</a></td><td><a href="#">Index S T U V</a></td><td><a href="#">Index W Y Z</a></td><td><a href="#">1906 (1)</a></td></tr>
                        <tr><td><a href="#">1906 (2)</a></td><td><a href="#">1906 (3)</a></td><td><a href="#">1906 (4)</a></td><td><a href="#">1906 (5)</a></td><td><a href="#">1907 (1)</a></td><td><a href="#">1907 (2)</a></td><td><a href="#">1907 (3)</a></td><td><a href="#">1907 (4)</a></td><td><a href="#">1907 (5)</a></td><td></td></tr>
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
