<?php
// ============================================================
// FILE: Page_1a.php  (Page 1a - Booklets, child of Page 1)
// PURPOSE: Shows two tables linking to pages of the two school booklets.
//          Clicking a page number opens that image via the viewer.
// PARENT PAGE: Page_1.php
// ============================================================

// LINE 1: Set the browser tab title
$page_title = 'Marshfield School History - Booklets';

// LINE 2: Highlight the About nav button (button 1) since this is a child of Page 1
$active_nav = 1;

// LINE 3: Include the shared header
include 'header.php';
?>

    <!-- ============================================================
         PAGE 1a - MAIN CONTENT
         Two booklet tables: A Historical Sketch and Marshfield Heroes of WW1
         ============================================================ -->

    <!-- LINE 4: Centred content wrapper -->
    <div class="content-full">

        <!-- ============================================================
             LINE 5: TABLE 1 - A HISTORICAL SKETCH
             PURPOSE: Links each page of the booklet to its image file
             INSTRUCTION: Replace # in href values with the actual image file path
             Format: Images/Booklets/Historical_Sketch/Page_XX.jpg
             ============================================================ -->
        <div class="table-section">

            <!-- LINE 6: Table section heading -->
            <h2>A Historical Sketch</h2>

            <!-- LINE 7: Info box explaining how the table works -->
            <div class="info-box">
                Click any page number below to open that page of the booklet.
                Images are in: <code>Images/Booklets/Historical_Sketch/</code>
            </div>

            <!-- LINE 8: Page index table -->
            <table class="page-table">
                <thead>
                    <tr>
                        <!-- LINE 9: Table column heading spans all 10 columns -->
                        <th colspan="10">A Historical Sketch — Page Index</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- LINE 10: ROW 1 — Front cover and pages 1–9
                         INSTRUCTION: Each <a href="..."> links to the viewer with ?page= number.
                         Front cover = page 0. Page 1 = page 1, etc.
                         RED items in the spec are already set up below. -->
                    <tr>
                        <td><a href="ahs-viewer.php?page=0">Front cover</a></td>
                        <td><a href="ahs-viewer.php?page=1">Page 1</a></td>
                        <td><a href="ahs-viewer.php?page=2">Page 2</a></td>
                        <td><a href="ahs-viewer.php?page=3">Page 3</a></td>
                        <td><a href="ahs-viewer.php?page=4">Page 4</a></td>
                        <td><a href="ahs-viewer.php?page=5">Page 5</a></td>
                        <td><a href="ahs-viewer.php?page=6">Page 6</a></td>
                        <td><a href="ahs-viewer.php?page=7">Page 7</a></td>
                        <td><a href="ahs-viewer.php?page=8">Page 8</a></td>
                        <td><a href="ahs-viewer.php?page=9">Page 9</a></td>
                    </tr>
                    <!-- LINE 11: ROW 2 — Pages 10–19
                         INSTRUCTION: Replace # with ahs-viewer.php?page=N for each page -->
                    <tr>
                        <td><a href="ahs-viewer.php?page=10">Page 10</a></td>
                        <td><a href="#">Page 11</a></td><!-- INSTRUCTION: Replace # with ahs-viewer.php?page=11 -->
                        <td><a href="#">Page 12</a></td><!-- INSTRUCTION: Replace # with ahs-viewer.php?page=12 -->
                        <td><a href="#">Page 13</a></td>
                        <td><a href="#">Page 14</a></td>
                        <td><a href="#">Page 15</a></td>
                        <td><a href="#">Page 16</a></td>
                        <td><a href="#">Page 17</a></td>
                        <td><a href="#">Page 18</a></td>
                        <td><a href="#">Page 19</a></td>
                    </tr>
                    <!-- LINE 12: ROW 3 — Pages 20–28 -->
                    <tr>
                        <td><a href="#">Page 20</a></td>
                        <td><a href="#">Page 21</a></td>
                        <td><a href="#">Page 22</a></td>
                        <td><a href="#">Page 23</a></td>
                        <td><a href="#">Page 24</a></td>
                        <td><a href="#">Page 25</a></td>
                        <td><a href="#">Page 26</a></td>
                        <td><a href="#">Page 27</a></td>
                        <td><a href="#">Page 28</a></td>
                        <td></td><!-- Empty cell to complete the row -->
                    </tr>
                </tbody>
            </table>

            <!-- LINE 13: Back navigation button -->
            <div class="page-nav">
                <a href="Page_1.php">&#8962; Home</a>
            </div>

        </div><!-- LINE 14: End of Historical Sketch table section -->


        <!-- ============================================================
             LINE 15: TABLE 2 - MARSHFIELD HEROES OF WW1
             PURPOSE: Links to pages of the WW1 heroes booklet
             INSTRUCTION: Replace # in href values with ahs-viewer.php?page=N
             ============================================================ -->
        <div class="table-section">

            <!-- LINE 16: Table heading -->
            <h2>Marshfield School: Our Heroes of WW1</h2>

            <!-- LINE 17: Info box -->
            <div class="info-box">
                Click any page number to open that page of the booklet.
                Images are in: <code>Images/Booklets/Marshfield_Heroes/</code>
                — Hyperlinks to be added using the Instruction Manual.
            </div>

            <!-- LINE 18: WW1 booklet page table -->
            <table class="page-table">
                <thead>
                    <tr>
                        <th colspan="10">Marshfield Heroes of WW1 — Page Index</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- LINE 19: Rows of 10 pages each.
                         INSTRUCTION: Replace each # with the correct viewer link.
                         Example: href="viewer.php?file=Images/Booklets/Marshfield_Heroes/Page_01.jpg" -->
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
                    <tr>
                        <td><a href="#">Page 51</a></td><td><a href="#">Page 52</a></td><td><a href="#">Page 53</a></td>
                        <td><a href="#">Page 54</a></td><td><a href="#">Page 55</a></td><td><a href="#">Page 56</a></td>
                        <td><a href="#">Page 57</a></td><td><a href="#">Page 58</a></td><td><a href="#">Page 59</a></td>
                        <td><a href="#">Page 60</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Page 61</a></td><td><a href="#">Page 62</a></td><td><a href="#">Page 63</a></td>
                        <td><a href="#">Page 64</a></td><td><a href="#">Page 65</a></td><td><a href="#">Page 66</a></td>
                        <td><a href="#">Page 67</a></td><td><a href="#">Page 68</a></td><td><a href="#">Page 69</a></td>
                        <td><a href="#">Page 70</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Page 71</a></td><td><a href="#">Page 72</a></td><td><a href="#">Page 73</a></td>
                        <td><a href="#">Page 74</a></td><td><a href="#">Page 75</a></td><td><a href="#">Page 76</a></td>
                        <td><a href="#">Page 77</a></td><td><a href="#">Page 78</a></td><td><a href="#">Page 79</a></td>
                        <td><a href="#">Page 80</a></td>
                    </tr>
                </tbody>
            </table>

            <!-- LINE 20: Back navigation -->
            <div class="page-nav">
                <a href="Page_1.php">&#8962; Home</a>
            </div>

        </div><!-- LINE 21: End of WW1 Heroes table section -->

    </div><!-- LINE 22: End of content-full wrapper -->

<?php
// LINE 23: Include shared footer
include 'footer.php';
?>
