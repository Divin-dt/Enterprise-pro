<?php
  if (isset($_GET['index'])) {
    $currentIndex = (int)$_GET['index'];
  } else {
    $currentIndex = 1;
  }

  $firstIndex=1;
  $lastIndex=9;

  $indexPath="Images/Admission_Registers/Thornton_ Lane_ 1894-1901/";

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

  if ($currentIndex < $firstIndex) $currentIndex = $firstIndex;
  if ($currentIndex > $lastIndex) $currentIndex = $lastIndex;

  $previousIndex = $currentIndex - 1;
  $nextIndex = $currentIndex + 1;

  $indexFile = $indexFiles[$currentIndex];
?>

<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" href="Page-css.css"/>
</head>
<body>
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

    <div class="viewer">
    <div class="back-link">
        <a href="Page_3a.php">Back to home</a>
</div>


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

    <div class="image-display">
        <img src="<?php echo $indexPath . $indexFile ?>" alt = "<?php echo $currentIndex?>"/>
    </div>
 
    <div class="navigation">
      <a href="tla-viewer.php?index=<?php echo $firstIndex; ?>"> First Page </a>

     <?php if ($currentIndex > $firstIndex): ?>
       <a href="tla-viewer.php?index=<?php echo $previousIndex; ?>"> Previous Page </a>
     <?php else: ?>
       <a class="disabled"> Previous Page </a>
     <?php endif; ?>

     <?php if ($currentIndex < $lastIndex): ?>
        <a href="tla-viewer.php?index=<?php echo $nextIndex; ?>"> Next Page </a>
     <?php else: ?>
        <a class="disabled"> Next Page </a>
     <?php endif; ?>

     <a href="tla-viewer.php?index=<?php echo $lastIndex; ?>"> Last Page </a>
    </div>
</div>
</body>
</html>