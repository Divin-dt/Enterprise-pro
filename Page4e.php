<?php
// ============================================================
// FILE: Page4e.php
// PURPOSE: Logbook — Juniors 1933 to 1964 - page index table linking to document images.
// PARENT PAGE: Page_4.php
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Logbook — Juniors 1933 to 1964';

// LINE 2: Highlight the Marshfield School nav button (button 4)
$active_nav = 4;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- PAGE Page4e - MAIN CONTENT -->

    <!-- LINE 4: Centred content wrapper -->
    <div class="content-full">

        <div class="table-section">

            <!-- LINE 5: Section heading
                 INSTRUCTION: To change the heading, edit the text inside <h2> below -->
            <h2>Logbook — Juniors 1933 to 1964</h2>

            <!-- LINE 6: Info box -->
            <div class="info-box">
                Click any page number to view it. Images are in:
                <code>Images/Log_Books/Juniors_1933-1964/</code><br>
                — Add hyperlinks using the Instruction Manual.
            </div>

            <!-- LINE 7: Page index table
                 INSTRUCTION: Replace each # with the correct viewer link.
                 Format: viewer.php?file=Images/Log_Books/Juniors_1933-1964/Page_01.jpg&back=Page4e.php
                 Add more <tr> rows of 10 cells as needed. -->
            <table class="page-table">
                <tbody>
                        <tr><td><a href="#">Front page</a></td><td><a href="#">Teachers 1</a></td><td><a href="#">Teachers 2</a></td><td><a href="#">Teachers 3</a></td><td><a href="#">Teachers 4</a></td><td><a href="#">Sickness 1</a></td><td><a href="#">Sickness 2</a></td><td><a href="#">Sickness 3</a></td><td><a href="#">Sickness 4</a></td><td><a href="#">Sickness 5</a></td></tr>
                        <tr><td><a href="#">Page 1</a></td><td><a href="#">Page 2</a></td><td><a href="#">Page 3</a></td><td><a href="#">Page 4</a></td><td><a href="#">Page 5</a></td><td><a href="#">Page 6</a></td><td><a href="#">Page 7</a></td><td><a href="#">Page 8</a></td><td><a href="#">Page 9</a></td><td><a href="#">Page 10</a></td></tr>
                        <tr><td><a href="#">Page 11</a></td><td><a href="#">Page 12</a></td><td><a href="#">Page 13</a></td><td><a href="#">Page 14</a></td><td><a href="#">Page 15</a></td><td><a href="#">Page 16</a></td><td><a href="#">Page 17</a></td><td><a href="#">Page 18</a></td><td><a href="#">Page 19</a></td><td><a href="#">Page 20</a></td></tr>
                        <tr><td><a href="#">Page 21</a></td><td><a href="#">Page 22</a></td><td><a href="#">Page 23</a></td><td><a href="#">Page 24</a></td><td><a href="#">Page 25</a></td><td><a href="#">Page 26</a></td><td><a href="#">Page 27</a></td><td><a href="#">Page 28</a></td><td><a href="#">Page 29</a></td><td><a href="#">Page 30</a></td></tr>
                        <tr><td><a href="#">Page 31</a></td><td><a href="#">Page 32</a></td><td><a href="#">Page 33</a></td><td><a href="#">Page 34</a></td><td><a href="#">Page 35</a></td><td><a href="#">Page 36</a></td><td><a href="#">Page 37</a></td><td><a href="#">Page 38</a></td><td><a href="#">Page 39</a></td><td><a href="#">Page 40</a></td></tr>
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
