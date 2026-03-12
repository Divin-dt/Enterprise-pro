<?php
// ============================================================
// FILE: Page_2.php  (Page 2 - Chapel Green Board School)
// PURPOSE: History and sources for Chapel Green Board School.
// ============================================================

// LINE 1: Set the browser tab title
$page_title = 'Marshfield School History - Chapel Green Board School';

// LINE 2: Highlight the Chapel Green nav button (button 2)
$active_nav = 2;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- ============================================================
         PAGE 2 - MAIN CONTENT
         Two-column layout: left = school history text, right = Notable Dates
         ============================================================ -->

    <!-- LINE 4: Two-column layout -->
    <div class="content-grid">

        <!-- LINE 5: LEFT COLUMN - Chapel Green history -->
        <div class="subPage">
            <header>
                <!-- LINE 6: Column heading -->
                <h3>Chapel Green Board School</h3>
            </header>

            <!-- LINE 7: Introduction paragraph -->
            <p>
                Links for sources available for this school are at the end of the text.
            </p>

            <!-- LINE 8: Background history -->
            <p>
                Chapel Green district was populated largely by people in the textile or mining occupations.
                It could be described as a poor area by today's standards. Education in the immediate area
                consisted of the Chapel Green Church School, which appears to have been overcrowded and
                understaffed. Other schools were about a mile away.
            </p>

            <!-- LINE 9: Petition paragraph - links to image sources -->
            <p>
                Residents in the area <a href="Images/Bradford_School_Board/Chapel_Green_Petition.JPG">petitioned</a>
                the School Board to open another school in the area. A
                <a href="Images/Bradford_School_Board/Chapel_Green_Survey.JPG">survey</a> of school accommodation
                in the area identified that there was a deficiency of 370 places.
            </p>

            <!-- LINE 10: Opening of the school -->
            <p>
                Subsequently a new school was opened on Mon 10 Sept 1877 in rented premises within the same
                building as the Church School, which is now a Hindu Temple. The new school was called Chapel
                Green Board School and had Infants and Junior (Mixed) departments. They occupied the
                <a href="Images/Maps_and_Plans/Plan_Ground_floor.JPG">ground floor</a> (see the plan) whilst
                the Church School had the <a href="Images/Maps_and_Plans/Plan_Upper_floor.JPG">upper floor</a>
                (see the plan).
            </p>

            <!-- LINE 11: Growth and closure -->
            <p>
                The school became popular and achieved good attainments. After being open a few years, the
                school began to run out of space and various lack-of-space issues were being reported in the
                government annual inspection reports. The School Board started discussions about building a
                new school rather than renting larger premises. Church members on the School Board were
                opposed to building a new school. Eventually building a new school was voted on and the
                search for a site, design and quotes began.
            </p>

            <!-- LINE 12: Closure date -->
            <p>This school closed on 29/10/1886.</p>

            <!-- LINE 13: Sources heading -->
            <p><strong>Sources</strong></p>

            <!-- LINE 14: Chapel Green logbook links -->
            <p>
                Chapel Green Board School Logbooks:<br>
                <a href="Images/Logbooks/Infant_1877-1905.pdf">Infant — 1877 to 1905</a>
                (pages 1 to 75 cover this school)<br>
                <a href="Images/Logbooks/Junior_1877-1910.pdf">Junior — 1877 to 1910</a>
                (pages 1 to 81 cover this school)
            </p>
        </div><!-- LINE 15: End of left column -->

        <!-- LINE 16: RIGHT COLUMN - Notable Dates -->
        <div class="noteableDates">
            <header>
                <h3>Notable Dates</h3>
            </header>
            <!-- LINE 17: Notable dates
                 INSTRUCTION: Add or change dates here -->
            <p>
                1877: Chapel Green Board School opened on 10 September in rented premises.<br>
                1877: Both Infants and Junior (Mixed) departments opened.<br>
                1880: Education Act made schooling compulsory for children aged 5 to 10.<br>
                1886: Chapel Green Board School closed on 29 October.
            </p>
        </div><!-- LINE 18: End of right column -->

    </div><!-- LINE 19: End of two-column content grid -->

<?php
// LINE 20: Include shared footer
include 'footer.php';
?>
