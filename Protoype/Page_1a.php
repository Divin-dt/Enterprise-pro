<?php
$imagePath="Images/Booklets/Historical_Sketch/";
?>

<html>
  <head>
  <!-- Character encoding for the text to be rendered properly -->
  <meta charset="utf-8"/>
  <!-- Design viewport settings for mobile compatibility -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Page title in browser -->
  <title>Marshfield School</title>
  <!--External reference of stylesheet that is used for page styling-->
  <link rel="stylesheet" href="Page-css.css"/>
</head>
<body>
     <!-- Navigation bar section containing nav bar to other parent pages -->
      <nav class="navbar">
      <div class="navbuttons">
        <ul>
          <!-- Navigation button that links to About page (Current page) -->
          <li><a href="Page 1.php">About</a></li>
          <!-- Navigation button that links to Page 2 (Chapel Green Board School) -->
          <li><a href="Page 2.php">Chapel Green Board School</a></li>
          <!-- Navigation button that links to Page 3 (Thorton Lane Board School) -->
          <li><a href="Page 3.php">Thorton Lane Board School</a></li>
          <!-- Navigation button that links to Page 4 (Marshfield School) -->
          <li><a href="Page 4.php">Marshfield School</a></li>
          <!-- Navigation button that links to Staff database (Staff sql file) -->
          <li class="align"><a href="Page 5.php">Staff database</a></li>
          <!-- Navigation button that links to Sources database (Sources sql file) -->
          <li><a href="Page 6.php">Sources database</a></li>
        </ul>
      </div>
    </nav>

    <!-- Container with First book title -->
    <div>
     <h3>A Historical Sketch</h3>
</div>

 <!-- Grid with links to each page of the Historical Sketch book -->
    <div class="ahs-grid">
      <!-- Front Cover link -->
      <a href="ahs-viewer.php?page=0">Front cover</a>
      <!-- Page 1 link -->
      <a href="ahs-viewer.php?page=1">Page 1</a>
      <!-- Page 2 link -->
      <a href="ahs-viewer.php?page=2">Page 2</a>
      <!-- Page 3 link -->
      <a href="ahs-viewer.php?page=3">Page 3</a>
      <!-- Page 4 link -->
      <a href="ahs-viewer.php?page=4">Page 4</a>
      <!-- Page 5 link -->
      <a href="ahs-viewer.php?page=5">Page 5</a>
      <!-- Page 6 link -->
      <a href="ahs-viewer.php?page=6">Page 6</a>
      <!-- Page 7 link -->
      <a href="ahs-viewer.php?page=7">Page 7</a>
      <!-- Page 8 link -->
      <a href="ahs-viewer.php?page=8">Page 8</a>
      <!-- Page 9 link -->
      <a href="ahs-viewer.php?page=9">Page 9</a>
      <!-- Page 10 link -->
      <a href="ahs-viewer.php?page=10">Page 10</a>
      <!-- Page 11 link -->
      <a href="ahs-viewer.php?page=11">Page 11</a>
      <!-- Page 12 link -->
      <a href="ahs-viewer.php?page=12">Page 12</a>
      <!-- Page 13 link -->
      <a href="ahs-viewer.php?page=13">Page 13</a>
      <!-- Page 14 link -->
      <a href="ahs-viewer.php?page=14">Page 14</a>
      <!-- Page 15 link -->
      <a href="ahs-viewer.php?page=15">Page 15</a>
      <!-- Page 16 link -->
      <a href="ahs-viewer.php?page=16">Page 16</a>
      <!-- Page 17 link -->
      <a href="ahs-viewer.php?page=17">Page 17</a>
      <!-- Page 18 link -->
      <a href="ahs-viewer.php?page=18">Page 18</a>
      <!-- Page 19 link -->
      <a href="ahs-viewer.php?page=19">Page 19</a>
      <!-- Page 20 link -->
      <a href="ahs-viewer.php?page=20">Page 20</a>
      <!-- Page 21 link -->
      <a href="ahs-viewer.php?page=21">Page 21</a>
      <!-- Page 22 link -->
      <a href="ahs-viewer.php?page=22">Page 22</a>
      <!-- Page 23 link -->
      <a href="ahs-viewer.php?page=23">Page 23</a>
      <!-- Page 24 link -->
      <a href="ahs-viewer.php?page=24">Page 24</a>
      <!-- Page 25 link -->
      <a href="ahs-viewer.php?page=25">Page 25</a>
      <!-- Page 26 link -->
      <a href="ahs-viewer.php?page=26">Page 26</a>
      <!-- Page 27 link -->
      <a href="ahs-viewer.php?page=27">Page 27</a>
      <!-- Page 28 link -->
      <a href="ahs-viewer.php?page=28">Page 28</a>
</div>

 &nbsp;

  <!-- Navigation bar section containing nav bar to other parent pages -->
      <nav class="navbar">
      <div class="navbuttons">
        <ul>
          <!-- Navigation button that links to About page (Current page) -->
          <li><a href="Page 1.php">About</a></li>
          <!-- Navigation button that links to Page 2 (Chapel Green Board School) -->
          <li><a href="Page 2.php">Chapel Green Board School</a></li>
          <!-- Navigation button that links to Page 3 (Thorton Lane Board School) -->
          <li><a href="Page 3.php">Thorton Lane Board School</a></li>
          <!-- Navigation button that links to Page 4 (Marshfield School) -->
          <li><a href="Page 4.php">Marshfield School</a></li>
          <!-- Navigation button that links to Staff database (Staff sql file) -->
          <li class="align"><a href="Page 5.php">Staff database</a></li>
          <!-- Navigation button that links to Sources database (Sources sql file) -->
          <li><a href="Page 6.php">Sources database</a></li>
        </ul>
      </div>
    </nav>

    <!-- Container with Second book title -->
    <div>
      <h3>
        Mashfield School<br>
        Our Hero's of WW1  
      </h3>

    <!-- Grid with page numbers from 1 - 80 without links-->
</div>
     <div class="ohw-grid">
      <!-- php code to create page numbers to fill grid -->
       <?php
       for ($i = 1; $i <= 80; $i++) {
      echo "<div class='grid-item'>Page $i</div>";
  }
?>
</div>
</body>
</html>

