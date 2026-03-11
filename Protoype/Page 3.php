<!DOCTYPE html>
<html>
<head>
  <!-- Character encoding for the text to be rendered properly -->
  <meta charset="utf-8"/>
  <!-- Design viewport settings for mobile compatibility -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Page title in browser -->
  <title>Marshfield School</title>
  <!--External reference of stylesheet that is used for page styling-->
  <link rel="stylesheet" href="style.css" size>
</head>

<body>
  <!-- Main grid container -->
  <div class="grid-container">
    <!-- Header section with Page title -->
    <div class="header">
      <h1>Marshfield School History</h1>
    </div>

    <!-- Image section showing an image of the school -->
    <div class="picture">
      <img src="Images/Images/Marshfield_School.jpg" alt="Marshfield School"/>
    </div>

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

    <!-- Container for 2 columns of text -->
    <div class="content-grid">

      <!-- Left column of the 2: project description -->
      <div class="subPage">
        <header>
          <h3>Thorton Lane Board School</h3>
        </header>

        <!-- Text highlighting the projects overview and purpose -->
        <p>
        Links to sources available for this school are at the end of this text.<br>
        The school opened on Mon 5 Nov 1886. The day started with the children marching from their former school to their new school a few hundred metres away.
        What would they have thought about their new school. Windows in all classrooms, non of them were broken like in their previous school, lots of space in the playground instead of a very small shared playground, 
        freshly painted wall instead of pealing plaster and individual classrooms instead of everyone in one room and new desks.
        </p>

        <!-- Links to logbooks concerning the project -->
        <p>
         Sources <br>
         Thornton Lane Board School Logbook <br>
         <!-- Link to Infant 1877- 1905 logbook  (pages 75 to 207 cover this school) -->
         <a href="Images/Logbooks/Infant_1877 -1905.pdf">Infant_1877 – 1905 </a> 		 (pages 75 to 207 cover this school) <br>
         <!-- Link to Junior 1877- 1910 logbook (pages 81 to 180 cover this school) -->
	       <a href="Images/Logbooks/Junior_1877 - 1910.pdf">Junior_1877 - 1910</a>       	(pages 81 to 180 cover this school)  <br>
       </p>

       <!-- Admission Register text -->
       <p>
         Admission Register <br>
		     Admission_Jan 1894 – Feb 1901 <br>
        </p>

        <!-- Newspapers about the project text -->
        <p>
         Newspapers <br>
		     24/4/1884: Erection of new school <br>
		     25/9 1884 : Dispute with Church members of School Board <br>
       </p>
      </div>

      <!-- Right Collumn of the 2: Noteable Dates -->
      <div class="noteableDates">
        <header>
          <h3>Noteable Dates</h3>
        </header>

        <!-- Text describing the noteable dates in the project's history -->
       <p>
       1886: Leaving school allowed if they had attained standard 6 <br>
       1886: Part time schooling allowed if they had attained standard 3 <br>
       1893: Minimum leaving age raised to 11 <br>
       1893: Compulsory education for Blind and Deaf children <br>
       1899: Minimum leaving age raised to 12 <br>	
       1899: Compulsory education for physically impaired children <br>
        </p>
      </div>
    </div>

    <!-- Container containing the footer and the author of the work -->
    <div class="footer">
    <p>Community History Research by Ray Greenhough</p>
    </div>
  </div>
</body>
</html>