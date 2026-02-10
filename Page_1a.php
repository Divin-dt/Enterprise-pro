<?php
$imagePath="Images/Booklets/Historical_Sketch/";
?>

<html>
  <head>
     <title>Marshfield School</title>
     <link rel="stylesheet" href="Page-css.css"/>
</head>
<body>
         <nav class="navbar">
      <div class="navbuttons">
        <ul>
          <li><a href="About.php">About</a></li>
          <li><a href="chapelgreen.html">Chapel Green Board School</a></li>
          <li><a href="thortonlane.html">Thorton Lane Board School</a></li>
          <li><a href="marshfield.html">Marshfield School</a></li>
          <li class="align"><a href="Staff db.xlsx">Staff database</a></li>
          <li><a href="Sources db.xlsx">Sources database</a></li>
        </ul>
      </div>
    </nav>

    <div>
     <h3>A Historical Sketch</h3>
</div>
    <div class="ahs-grid">
      <a href="viewer.php?page=0">Front cover</a>
      <a href="viewer.php?page=1">Page 1</a>
      <a href="viewer.php?page=2">Page 2</a>
      <a href="viewer.php?page=3">Page 3</a>
      <a href="viewer.php?page=4">Page 4</a>
      <a href="viewer.php?page=5">Page 5</a>
      <a href="viewer.php?page=6">Page 6</a>
      <a href="viewer.php?page=7">Page 7</a>
      <a href="viewer.php?page=8">Page 8</a>
      <a href="viewer.php?page=9">Page 9</a>
      <a href="viewer.php?page=10">Page 10</a>
      <a href="viewer.php?page=11">Page 11</a>
      <a href="viewer.php?page=12">Page 12</a>
      <a href="viewer.php?page=13">Page 13</a>
      <a href="viewer.php?page=14">Page 14</a>
      <a href="viewer.php?page=15">Page 15</a>
      <a href="viewer.php?page=16">Page 16</a>
      <a href="viewer.php?page=17">Page 17</a>
      <a href="viewer.php?page=18">Page 18</a>
      <a href="viewer.php?page=19">Page 19</a>
      <a href="viewer.php?page=20">Page 20</a>
      <a href="viewer.php?page=21">Page 21</a>
      <a href="viewer.php?page=22">Page 22</a>
      <a href="viewer.php?page=23">Page 23</a>
      <a href="viewer.php?page=24">Page 24</a>
      <a href="viewer.php?page=25">Page 25</a>
      <a href="viewer.php?page=26">Page 26</a>
      <a href="viewer.php?page=27">Page 27</a>
      <a href="viewer.php?page=28">Page 28</a>
</div>

 &nbsp;

  <nav class="navbar">
      <div class="navbuttons">
        <ul>
          <li><a href="About.php">About</a></li>
          <li><a href="chapelgreen.html">Chapel Green Board School</a></li>
          <li><a href="thortonlane.html">Thorton Lane Board School</a></li>
          <li><a href="marshfield.html">Marshfield School</a></li>
          <li class="align"><a href="Staff db.xlsx">Staff database</a></li>
          <li><a href="Sources db.xlsx">Sources database</a></li>
        </ul>
      </div>
    </nav>

    <div>
      <h3>
        Mashfield School<br>
        Our Hero's of WW1  
      </h3>

</div>
     <div class="ohw-grid">
       <?php
       for ($i = 1; $i <= 80; $i++) {
      echo "<div class='grid-item'>Page $i</div>";
  }
?>
</div>
</body>
</html>

