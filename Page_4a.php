<?php
// ============================================================
// FILE: Page_4a.php  (Page 4a - Logbook Infants 1905–1939)
// PURPOSE: Page index table linking to each page of the Infants Logbook 1905-1939.
// PARENT PAGE: Page_4.php
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Logbook Infants 1905–1939';

// LINE 2: Highlight the Marshfield School nav button (button 4)
$active_nav = 4;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- PAGE 4a - MAIN CONTENT -->

    <!-- LINE 4: Centred content wrapper -->
    <div class="content-full">

        <div class="table-section">

            <!-- LINE 5: Section heading - change the title here if reusing this page for another logbook -->
            <h2>Logbook — Infants 1905 to 1939</h2>

            <!-- LINE 6: Info box with instructions -->
            <div class="info-box">
                Click any page number to view it. Images are in:
                <code>Images/Log_Books/Infants_1905-1939/</code><br>
                — Add hyperlinks using the Instruction Manual.
            </div>

            <!-- LINE 7: Page index table
                 INSTRUCTION: Replace each # with the correct image path or viewer link.
                 Format: viewer.php?file=Images/Log_Books/Infants_1905-1939/Page_01.jpg
                 Add more rows of 10 as needed. -->
            <table class="page-table">
                <tbody>
                    <tr>
                        <td><a href="#">Page 1</a></td><td><a href="#">Page 2</a></td><td><a href="#">Page 3</a></td>
                        <td><a href="#">Page 4</a></td><td><a href="#">Page 5</a></td><td><a href="#">Page 6</a></td>
                        <td><a href="#">Page 7</a></td><td><a href="#">Page 8</a></td><td><a href="#">Page 9</a></td>
                        <td><a href="#">Page 10</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Page 11</a></td><td><a href="#">Page 12</a></td><td><a href="#">Page 13</a></td>
                        <td><a href="#">Page 14</a></td><td><a href="#">Page 15</a></td><td><a href="#">Page 16</a></td>
                        <td><a href="#">Page 17</a></td><td><a href="#">Page 18</a></td><td><a href="#">Page 19</a></td>
                        <td><a href="#">Page 20</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Page 21</a></td><td><a href="#">Page 22</a></td><td><a href="#">Page 23</a></td>
                        <td><a href="#">Page 24</a></td><td><a href="#">Page 25</a></td><td><a href="#">Page 26</a></td>
                        <td><a href="#">Page 27</a></td><td><a href="#">Page 28</a></td><td><a href="#">Page 29</a></td>
                        <td><a href="#">Page 30</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Page 31</a></td><td><a href="#">Page 32</a></td><td><a href="#">Page 33</a></td>
                        <td><a href="#">Page 34</a></td><td><a href="#">Page 35</a></td><td><a href="#">Page 36</a></td>
                        <td><a href="#">Page 37</a></td><td><a href="#">Page 38</a></td><td><a href="#">Page 39</a></td>
                        <td><a href="#">Page 40</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Page 41</a></td><td><a href="#">Page 42</a></td><td><a href="#">Page 43</a></td>
                        <td><a href="#">Page 44</a></td><td><a href="#">Page 45</a></td><td><a href="#">Page 46</a></td>
                        <td><a href="#">Page 47</a></td><td><a href="#">Page 48</a></td><td><a href="#">Page 49</a></td>
                        <td><a href="#">Page 50</a></td>
                    </tr>
                </tbody>
            </table>

            <!-- LINE 8: Navigation buttons
                 INSTRUCTION: Adjust the "Back to" link to suit the parent page -->
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
