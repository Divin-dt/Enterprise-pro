<?php
// ============================================================
// FILE: Page4b.php
// PURPOSE: Logbook — Infants 1939 to 1966 - page index table linking to document images.
// PARENT PAGE: Page_4.php
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Logbook — Infants 1939 to 1966';

// LINE 2: Highlight the Marshfield School nav button (button 4)
$active_nav = 4;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- PAGE Page4b - MAIN CONTENT -->

    <!-- LINE 4: Centred content wrapper -->
    <div class="content-full">

        <div class="table-section">

            <!-- LINE 5: Section heading
                 INSTRUCTION: To change the heading, edit the text inside <h2> below -->
            <h2>Logbook — Infants 1939 to 1966</h2>

            <!-- LINE 6: Info box -->
            <div class="info-box">
                Click any page number to view it. Images are in:
                <code>Images/Log_Books/Infants_1939-1966/</code><br>
                — Add hyperlinks using the Instruction Manual.
            </div>

            <!-- LINE 7: Page index table
                 INSTRUCTION: Replace each # with the correct viewer link.
                 Format: viewer.php?file=Images/Log_Books/Infants_1939-1966/Page_01.jpg&back=Page4b.php
                 Add more <tr> rows of 10 cells as needed. -->
            <table class="page-table">
                <tbody>
                        <tr><td><a href="#">Front page</a></td><td><a href="#">Inspection</a></td><td><a href="#">Page 1/2</a></td><td><a href="#">Page 3/4</a></td><td><a href="#">Page 5/6</a></td><td><a href="#">Page 7/8</a></td><td><a href="#">Page 9/10</a></td><td><a href="#">Page 11/12</a></td><td><a href="#">Page 13/14</a></td><td><a href="#">Page 15/16</a></td></tr>
                        <tr><td><a href="#">Page 17/18</a></td><td><a href="#">Page 19/20</a></td><td><a href="#">Page 21/22</a></td><td><a href="#">Page 23/24</a></td><td><a href="#">Page 25/26</a></td><td><a href="#">Page 27/28</a></td><td><a href="#">Page 29/30</a></td><td><a href="#">Page 31/32</a></td><td><a href="#">Page 33/34</a></td><td><a href="#">Page 35/36</a></td></tr>
                        <tr><td><a href="#">Page 37/38</a></td><td><a href="#">Page 39/40</a></td><td><a href="#">Page 41/42</a></td><td><a href="#">Page 43/44</a></td><td><a href="#">Page 45/46</a></td><td><a href="#">Page 47/48</a></td><td><a href="#">Page 49/50</a></td><td><a href="#">Page 51/52</a></td><td><a href="#">Page 53/54</a></td><td><a href="#">Page 55/56</a></td></tr>
                        <tr><td><a href="#">Page 57/58</a></td><td><a href="#">Page 59/60</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
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
