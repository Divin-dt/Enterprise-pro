<?php
//if statement to get the current index or page number 
if (isset($_GET['page'])) {
    $currentPage = (Int)$_GET['page'];
} else {
    $currentPage = 0;
}

//Variables defining the first and last indexes
$firstPage = 0;
$lastPage = 28;

//php file path
$imagePath="Images/Booklets/Historical_Sketch/";

//php code to ensure the current page is the first page
if ($currentPage < $firstPage) $currentPage = $firstPage;
//php code to ensure the current page is the last page
if ($currentPage > $lastPage) $currentPage = $lastPage;

//php code defining the next page and previous page variables
$previousPage = $currentPage - 1;
$nextPage = $currentPage + 1;

//php code to decide between front cover image or page image
if ($currentPage == 0) {
    $imageFile = "Front cover.jpg";
} else {
    $imageFile = "Page " . $currentPage . ".jpg";
}
?>

<html>
    <head>
     <!-- Character encoding for the text to be rendered properly -->
     <meta charset="utf-8"/>
     <!-- Design viewport settings for mobile compatibility -->
     <meta name="viewport" content="width=device-width, initial-scale=1" />
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

<!-- Container for viewer -->
 <div class="viewer">

    <!--Container with button to page_3a.php -->
    <div class="back-link">
        <a href="Page_1a.php">Back to home</a>
</div>
</div>

<!-- php code to select main text -->
<?php if($currentPage == 0):?>
    <h3>Front Cover</h3>
    <?php else: ?>
        <h3> Page <?php echo $currentPage; ?> of <?php echo $lastPage; ?></h3>
<?php endif; ?>
   
    <!-- Container for image display -->
    <div class="image-display">
        <!--Image is selected by appending the file path and the current page number's corresponding image -->
        <img src="<?php echo $imagePath . $imageFile ?>" alt="<?php echo ($currentPage == 0) ? "FrontCover" : "Page " . $currentPage; ?>"/>
    </div>

    <!-- Buttons to control image display -->
     <!-- Button that takes user to first page of the book -->
    <div class="navigation">
        <a href="ahs-viewer.php?page=<?php echo $firstPage; ?>"> First Page </a>

     <!-- Button taking user to the previous page if there is one -->
     <?php if ($currentPage > $firstPage): ?>
       <a href="ahs-viewer.php?page=<?php echo $previousPage; ?>"> Previous Page </a>
     <?php else: ?>
       <a class="disabled"> Previous Page </a>
     <?php endif; ?>

      <!-- Button taking user to the next page if there is one -->
     <?php if ($currentPage < $lastPage): ?>
        <a href="ahs-viewer.php?page=<?php echo $nextPage; ?>"> Next Page </a>
     <?php else: ?>
        <a class="disabled"> Next Page </a>
     <?php endif; ?>

     <!-- Button to take user to the last page of the book -->
     <a href="ahs-viewer.php?page=<?php echo $lastPage; ?>"> Last Page </a>
    </div>
</body>
</html>