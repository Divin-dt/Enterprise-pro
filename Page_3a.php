<html>
  <head>
     <title>Marshfield School</title>
     <link rel="stylesheet" href="Page-css.css"/>
</head>
<body>
      <!-- Navigation bar -->
     <nav class="navbar">
      <div class="navbuttons">
        <ul>
          <li><a href="Page 1.php">About</a></li>
          <li><a href="Page 2.php">Chapel Green Board School</a></li>
          <li><a href="Page 3.php">Thorton Lane Board School</a></li>
          <li><a href="Page 4.php">Marshfield School</a></li>
          <li class="align"><a href="Staff db.xlsx">Staff database</a></li>
          <li><a href="Sources db.xlsx">Sources database</a></li>
        </ul>
      </div>
    </nav>
     
     <div>
     <h3>Thorton Lane Admissions: Jan 1894 - Feb 1901</h3>
     </div>
     
     <div class="tla-grid">
     <a href="tla-viewer.php?index=1">Index A to B</a>
     <a href="tla-viewer.php?index=2">Index B to C</a>
     <a href="tla-viewer.php?index=3">Index D to G</a>
     <a href="tla-viewer.php?index=4">Index H to J</a>
     <a href="tla-viewer.php?index=5">Index K to M</a>
     <a href="tla-viewer.php?index=6">Index N to P</a>
     <a href="tla-viewer.php?index=7">Index R to S</a>
     <a href="tla-viewer.php?index=8">Index T to U</a>
     <a href="tla-viewer.php?index=9">Index W to Y</a>
     <a href="">Index</a>
     <?php
     for ($i = 1; $i <= 33; $i++) {
      echo "<a class='disabled'>Page $i</a>";
     }
     ?>
     </div>

