<?php
// ============================================================
// FILE: Page_1.php  (Page 1 - About)
// PURPOSE: The home/about page. Describes the project and contains Notable Dates.
// ============================================================

// LINE 1: Set the browser tab title for this page
$page_title = 'Marshfield School History - About';

// LINE 2: Tell the header which nav button to highlight (1 = About)
$active_nav = 1;

// LINE 3: Include the shared header (outputs <html>, <head>, header banner, nav bar, opens <main>)
include 'header.php';
?>

    <!-- ============================================================
         PAGE 1 - MAIN CONTENT
         Two-column layout: left = About text, right = Notable Dates
         ============================================================ -->

    <!-- LINE 4: Two-column content grid -->
    <div class="content-grid">

        <!-- ============================================================
             LINE 5: LEFT COLUMN - About text
             INSTRUCTION: To change the About text, edit the paragraphs below
             ============================================================ -->
        <div class="subPage">
            <header>
                <!-- LINE 6: Left column heading -->
                <h3>About</h3>
            </header>

            <!-- LINE 7: Introduction paragraph -->
            <p>
                This application is a Community Research project focusing on the history of Marshfield School
                (Little Horton District), which is part of Bradford's educational history. It is intended as a
                resource for anyone researching Bradford's educational history or just interested in the history
                of Marshfield School.
            </p>

            <!-- LINE 8: Copyright notice -->
            <p>
                It should be noted that all the information available in this application was provided under a
                personal, research and educational copyright. Therefore, it is likely to be covered by some other
                form of copyright restrictions. See the copyright statement at the end of this text. If you ignore
                this warning on copyright infringements, then as the person carrying out the infringement you will
                be solely responsible for any repercussions.
            </p>

            <!-- LINE 9: Sources overview paragraph -->
            <p>
                The information available to users shows the school through the lens of School Log Books,
                Admission Books, Punishment Books, Images and other sources. Using these sources enables the
                school history to be viewed from its conception as Chapel Green Board School through to the
                present Marshfield School.
            </p>

            <!-- LINE 10: Acknowledgements paragraph -->
            <p>
                Some of the resources included here have been collected and published (though not widely) by
                Mr D Craven in 2004. Many thanks to Mr D Craven for allowing me to merge my research with that
                of his own.
            </p>

            <!-- LINE 11: Logbooks description -->
            <p>
                Major resources like the School Logbooks offer a unique window into the past from which general
                information on the day-to-day running of the school can be seen. From these comments many social
                aspects of the time can be seen, and occasionally the head teacher's private thoughts or
                frustrations are expressed.
                Admission Books show when a person entered the school, their father's name, Standards attained
                and when they left school. Once again another source full of social and societal information
                just waiting to be analysed.
            </p>

            <!-- LINE 12: Notable Dates explanation -->
            <p>
                Notable Dates are intended to show key dates for researchers and interested parties to note.
            </p>

            <!-- LINE 13: Booklets paragraph with link to Page 1a -->
            <p>
                Two booklets that have been published about Marshfield School are included in the sources.
                The first is the 'Historical Sketch' of Marshfield School written by J Jackson. The second is
                'Marshfield School: Our Heroes of World War 1' written by Ray Greenhough.
                To read the two booklets click <a href="Page_1a.php">here</a>.
            </p>
        </div><!-- LINE 14: End of left column -->

        <!-- ============================================================
             LINE 15: RIGHT COLUMN - Notable Dates
             INSTRUCTION: To add or change dates, edit the lines inside the <p> tag below
             ============================================================ -->
        <div class="noteableDates">
            <header>
                <!-- LINE 16: Right column heading -->
                <h3>Notable Dates</h3>
            </header>

            <!-- LINE 17: Notable dates text
                 INSTRUCTION: Each date is on its own line ending with <br> -->
            <p>
                1870: Education Act enables local councils to open, operate and fund elementary education through the public purse.<br>
                1870: The purpose of the Act was to provide education where there was insufficient Church School provision — often called "Filling the Gaps".<br>
                1870: Bradford set up its School Board in November.<br>
                1873: The School Board opened its first schools in rented buildings.<br>
                1874: Eight School Board schools were built and opened.<br>
                1876: Parents became responsible for ensuring their children learnt the three Rs.<br>
                1876: Bradford School Board created an attendance committee.<br>
                1876: Restricted child labour by linking it to passing certain school standards.
            </p>
        </div><!-- LINE 18: End of right column -->

    </div><!-- LINE 19: End of two-column content grid -->

<?php
// LINE 20: Include the shared footer (closes <main>, outputs <footer>, closes <body> and <html>)
include 'footer.php';
?>
