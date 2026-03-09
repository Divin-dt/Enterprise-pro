<?php
  //if statement to get the current index or page number 
  if (isset($_GET['index'])) {
    $currentIndex = (int)$_GET['index'];
  } else {
    $currentIndex = 1;
  }

  //Variables defining the first and last indexes
  $firstIndex=1;
  $lastIndex=9;

  //php file path
  $indexPath="Images/Admission_Registers/Thornton_ Lane_ 1894-1901/";

  //Each index picture is put into an array and has a number attached
  $indexFiles = [
    1 => "001Index A,B.jpg",
    2 => "001Index B,C.jpg",
    3 => "001Index D,E,F,G.jpg",
    4 => "001Index H,I,J.jpg",
    5 => "001Index K,L,M.jpg",
    6 => "001Index N,O,P.jpg",
    7 => "001Index R,S.jpg",
    8 => "001Index T,U,V.jpg",
    9 => "001Index W,Y.jpg" ,
  ];

  //php code to ensure the current page is the first page
  if ($currentIndex < $firstIndex) $currentIndex = $firstIndex;
  //php code to ensure the current page is the last page
  if ($currentIndex > $lastIndex) $currentIndex = $lastIndex;

  //php code defining the next page and previous page variables
  $previousIndex = $currentIndex - 1;
  $nextIndex = $currentIndex + 1;

  //php code to find the corresponding image to the current index
  $indexFile = $indexFiles[$currentIndex];
?>

<!DOCTYPE html>
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
        <a href="Page_3a.php">Back to home</a>
   </div>

    <!-- php code to select main text -->
    <?php if($currentIndex == 1):?>
      <h3>Index A to B</h3>
    <?php elseif ($currentIndex == 2):?>
      <h3> Index B to C</h3>
    <?php elseif ($currentIndex == 3):?>
      <h3> Index D to G</h3>
    <?php elseif ($currentIndex == 4):?>
      <h3> Index H to J</h3>
    <?php elseif ($currentIndex == 5):?>
      <h3> Index K to M</h3>
    <?php elseif ($currentIndex == 6):?>
      <h3> Index N to P </h3>
    <?php elseif ($currentIndex == 7):?>
      <h3> Index R to S</h3>
    <?php elseif ($currentIndex == 8):?>
      <h3> Index T to U </h3>
    <?php else: ?>
      <h3> Index W to Y </h3>
    <?php endif ?>

    <!-- Container for image display -->
    <div class="image-display">
        <!--Image is selected by appending the file path and the current page number's corresponding image -->
        <img src="<?php echo $indexPath . $indexFile ?>" alt = "<?php echo $currentIndex?>"/>
    </div>
 
    <!-- Buttons to control image display -->
     <!-- Button that takes user to first page of the book -->
    <div class="navigation">
      <a href="tla-viewer.php?index=<?php echo $firstIndex; ?>"> First Page </a>

      <!-- Button taking user to the previous page if there is one -->
     <?php if ($currentIndex > $firstIndex): ?>
       <a href="tla-viewer.php?index=<?php echo $previousIndex; ?>"> Previous Page </a>
     <?php else: ?>
       <a class="disabled"> Previous Page </a>
     <?php endif; ?>

     <!-- Button taking user to the next page if there is one -->
     <?php if ($currentIndex < $lastIndex): ?>
        <a href="tla-viewer.php?index=<?php echo $nextIndex; ?>"> Next Page </a>
     <?php else: ?>
        <a class="disabled"> Next Page </a>
     <?php endif; ?>

     <!-- Button to take user to the last page of the book -->
     <a href="tla-viewer.php?index=<?php echo $lastIndex; ?>"> Last Page </a>
    </div>
</div>
</body>
</html>