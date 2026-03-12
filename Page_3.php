<?php
// ============================================================
// FILE: Page_3.php  (Page 3 - Thornton Lane Board School)
// PURPOSE: History and sources for Thornton Lane Board School.
// ============================================================

// LINE 1: Set the browser tab title
$page_title = 'Marshfield School History - Thornton Lane Board School';

// LINE 2: Highlight the Thornton Lane nav button (button 3)
$active_nav = 3;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- PAGE 3 - MAIN CONTENT -->

    <!-- LINE 4: Two-column layout -->
    <div class="content-grid">

        <!-- LINE 5: LEFT COLUMN - Thornton Lane history -->
        <div class="subPage">
            <header>
                <!-- LINE 6: Column heading - note correct spelling: Thornton (not Thorton) -->
                <h3>Thornton Lane Board School</h3>
            </header>

            <!-- LINE 7: Introduction -->
            <p>
                Links to sources available for this school are at the end of this text.
            </p>

            <!-- LINE 8: Opening description -->
            <p>
                The school opened on Monday 5 November 1886. The day started with the children marching
                from their former school to their new school a few hundred metres away. What would they
                have thought about their new school — windows in all classrooms, none of them broken like
                in their previous school, lots of space in the playground instead of a very small shared
                one, freshly painted walls instead of peeling plaster, individual classrooms instead of
                everyone in one room, and new desks.
            </p>

            <!-- LINE 9: Sources heading -->
            <p><strong>Sources</strong></p>

            <!-- LINE 10: Logbook sources -->
            <p>
                Thornton Lane Board School Logbooks:<br>
                <a href="Images/Logbooks/Infant_1877-1905.pdf">Infant — 1877 to 1905</a>
                (pages 75 to 207 cover this school)<br>
                <a href="Images/Logbooks/Junior_1877-1910.pdf">Junior — 1877 to 1910</a>
                (pages 81 to 180 cover this school)
            </p>

            <!-- LINE 11: Admission register link to child page 3a -->
            <p>
                Admission Register:<br>
                <a href="Page_3a.php">Admission Register — January 1894 to February 1901</a>
            </p>

            <!-- LINE 12: Newspaper sources -->
            <p>
                Newspapers:<br>
                24/04/1884: Erection of new school<br>
                25/09/1884: Dispute with Church members of School Board
            </p>
        </div><!-- LINE 13: End of left column -->

        <!-- LINE 14: RIGHT COLUMN - Notable Dates -->
        <div class="noteableDates">
            <header>
                <h3>Notable Dates</h3>
            </header>
            <!-- LINE 15: Notable dates for this period -->
            <p>
                1886: Thornton Lane Board School opened on 5 November.<br>
                1886: Leaving school allowed if pupils had attained Standard 6.<br>
                1886: Part-time schooling allowed if pupils had attained Standard 3.<br>
                1893: Minimum leaving age raised to 11.<br>
                1893: Compulsory education introduced for Blind and Deaf children.<br>
                1899: Minimum leaving age raised to 12.<br>
                1899: Compulsory education extended to physically impaired children.
            </p>
        </div><!-- LINE 16: End of right column -->

    </div><!-- LINE 17: End of two-column grid -->

<?php
// LINE 18: Include shared footer
include 'footer.php';
?>
