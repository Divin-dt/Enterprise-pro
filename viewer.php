<?php
if (isset($_GET['page'])) {
    $currentPage = (Int)$_GET['page'];
} else {
    $currentPage = 0;
}

$firstPage = 0;
$lastPage = 28;

$imagePath="Images/Booklets/Historical_Sketch/";

if ($currentPage < $firstPage) $currentPage = $firstPage;
if ($currentPage > $lastPage) $currentPage = $lastPage;

$previousPage = $currentPage - 1;
$nextPage = $currentPage + 1;

if ($currentPage == 0) {
    $imageFile = "Front cover.jpg";
} else {
    $imageFile = "Page " . $currentPage . ".jpg";
}
?>

<html>
    <head>
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

 <div class="viewer">
    <div class="back-link">
        <a href="Page_1a.php">Back to home</a>
</div>
</div>

<?php if($currentPage == 0):?>
    <h3>Front Cover</h3>
    <?php else: ?>
        <h3> Page <?php echo $currentPage; ?> of <?php echo $lastPage; ?></h3>
<?php endif; ?>
   
    <div class="image-display">
        <img src="<?php echo $imagePath . $imageFile ?>" alt="<?php echo ($currentPage == 0) ? "FrontCover" : "Page " . $currentPage; ?>" />
    </div>

    <div class="navigation">
        <a href="viewer.php?page=<?php echo $firstPage; ?>"> First Page </a>

     <?php if ($currentPage > $firstPage): ?>
       <a href="viewer.php?page=<?php echo $previousPage; ?>"> Previous Page </a>
     <?php else: ?>
       <a class="disabled"> Previous Page </a>
     <?php endif; ?>

     <?php if ($currentPage < $lastPage): ?>
        <a href="viewer.php?page=<?php echo $nextPage; ?>"> Next Page </a>
     <?php else: ?>
        <a class="disabled"> Next Page </a>
     <?php endif; ?>

     <a href="viewer.php?page=<?php echo $lastPage; ?>"> Last Page </a>
    </div>
</body>
</html>