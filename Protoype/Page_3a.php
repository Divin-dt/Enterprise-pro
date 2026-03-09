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
     
    <!-- Container with Main Page title -->
     <div>
     <h3>Thorton Lane Admissions: Jan 1894 - Feb 1901</h3>
     </div>
     
     
     <div class="tla-grid">
     <!-- Index A to B link -->
     <a href="tla-viewer.php?index=1">Index A to B</a>
     <!-- Index B to C link -->
     <a href="tla-viewer.php?index=2">Index B to C</a>
     <!-- Index D to G link -->
     <a href="tla-viewer.php?index=3">Index D to G</a>
     <!-- Index H to J link -->
     <a href="tla-viewer.php?index=4">Index H to J</a>
     <!-- Index K to M link -->
     <a href="tla-viewer.php?index=5">Index K to M</a>
     <!-- Index N to P link -->
     <a href="tla-viewer.php?index=6">Index N to P</a>
     <!-- Index R to S link -->
     <a href="tla-viewer.php?index=7">Index R to S</a>
     <!-- Index T to U link -->
     <a href="tla-viewer.php?index=8">Index T to U</a>
     <!-- Index W to Y link -->
     <a href="tla-viewer.php?index=9">Index W to Y</a>
     <a href="">Index</a>
     <!-- php code to fill the grid with page numbers -->
     <?php
     for ($i = 1; $i <= 33; $i++) {
      echo "<a class='disabled'>Page $i</a>";
     }
     ?>
     </div>

