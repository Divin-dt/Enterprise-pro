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
     <h3>Logbook (Infants) 1905 - 1939</h3>
</div>

<!-- Grid with page number text which can have links to book pages -->
<div class="grid">
    <a>Page 1</a>     
    <a>Page 2</a>
    <a>Page 3</a>
    <a>Page 4</a>
    <a>Page 5</a>
    <a>Page 6</a>
    <a>etc.</a>
    <!-- php code that makes new empty grid boxes -->
    <?php
       for ($i = 1; $i <= 43; $i++) {
      echo "<a>  </a>";
  }
?>

</div>

</body>
</html>