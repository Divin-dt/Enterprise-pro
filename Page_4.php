<?php
// ============================================================
// FILE: Page_4.php  (Page 4 - Marshfield School)
// PURPOSE: History and sources index for Marshfield School.
//          Links to child pages 4a through 4s for all source documents.
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Marshfield School';

// LINE 2: Highlight the Marshfield School nav button (button 4)
$active_nav = 4;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- PAGE 4 - MAIN CONTENT -->

    <!-- LINE 4: Two-column layout -->
    <div class="content-grid">

        <!-- LINE 5: LEFT COLUMN - Sources and history -->
        <div class="subPage">
            <header>
                <!-- LINE 6: Column heading -->
                <h3>Marshfield School</h3>
            </header>

            <!-- LINE 7: Name change history -->
            <p>
                With the incorporation of Thornton into the Bradford Borough, the Thornton School Board
                identified that there would be confusion with two Thornton School names and two Bradford
                School names. The Thornton Board changed the name of James Street School (to avoid confusion
                with St James School in Bradford) to Thornton Board School. The Board also recommended that
                Thornton Lane Board School be changed to Marshfield School to avoid confusion with the newly
                named Thornton Board School.
            </p>

            <!-- LINE 8: Logbooks sources heading -->
            <p><strong>Marshfield School Logbooks</strong></p>

            <!-- LINE 9: Logbook links - each leads to a child page with a page-number index table
                 INSTRUCTION: To add a logbook link, copy one of the <a href="..."> lines and update
                 the page filename and text. -->
            <p>
                <a href="Page_4a.php">Infants — 1905 to 1939</a><br>
                <a href="Page4b.php">Infants — 1939 to 1969</a><br>
                <a href="Page4c.php">Infants — 1969 to 1973</a><br>
                <a href="Page4d.php">Juniors — 1910 to 1933</a><br>
                <a href="Page4e.php">Juniors — 1933 to 1964</a>
            </p>

            <!-- LINE 10: Admission Registers heading -->
            <p><strong>Admission Registers</strong></p>

            <!-- LINE 11: Admission register links -->
            <p>
                <a href="Page4f.php">Infants — September 1943 to January 1954</a><br>
                <a href="Page4g.php">Infants — September 1954 to July 1965</a><br>
                <a href="Page4h.php">Infants — September 1965 to January 1973</a><br>
                <a href="Page4i.php">Juniors — April 1906 to July 1911</a><br>
                <a href="Page4j.php">Juniors — August 1911 to July 1917</a><br>
                <a href="Page4k.php">Juniors — August 1928 to January 1944</a><br>
                <a href="Page4l.php">Juniors — March 1944 to February 1954</a><br>
                <a href="Page4m.php">Juniors — March 1954 to January 1963</a><br>
                <a href="Page4n.php">Juniors — October 1963 to September 1971</a><br>
                <a href="Page4o.php">Juniors — September 1971 to September 1973</a><br>
                <a href="Page4p.php">Seniors — 1908 to 1928</a>
            </p>

            <!-- LINE 12: Punishment Book heading -->
            <p><strong>Punishment Book</strong></p>

            <!-- LINE 13: Punishment book link -->
            <p>
                <a href="Page4q.php">Punishment Book — 1902 to 1965</a>
            </p>

            <!-- LINE 14: Photographs heading -->
            <p><strong>Photographs</strong></p>

            <!-- LINE 15: Photographs list (no links yet - Ray will add them) -->
            <p>
                Miss Teal's scrapbook of school activities — 1931 to 1952<br>
                Miss Teal's scrapbook of Northern Ireland tour — 1949<br>
                Miss Teal's scrapbook of tours to London 1950 and Bournemouth 1951<br>
                Miss Teal's scrapbook of tours to Oban and the Western Isles — 1953<br>
                Photograph album — circa 1955 to 1956<br>
                Miss Leach / Mrs Emmerson's album<br>
                Miscellaneous pictures<br>
                Mayday celebrations
            </p>
        </div><!-- LINE 16: End of left column -->

        <!-- LINE 17: RIGHT COLUMN - Notable Dates -->
        <div class="noteableDates">
            <header>
                <h3>Notable Dates</h3>
            </header>
            <!-- LINE 18: Notable dates for Marshfield School period
                 INSTRUCTION: Add or edit dates here -->
            <p>
                1902: Punishment Book recording begins.<br>
                1905: Infants Logbook recording begins.<br>
                1906: Juniors Admission Register begins.<br>
                1910: Juniors Logbook recording begins.<br>
                1918: Education Act raised school leaving age to 14.<br>
                1928: Seniors Admission Register ends.<br>
                1939: Infants Logbook second volume begins.<br>
                1944: Butler Education Act — free secondary education for all.<br>
                1965: Punishment Book recording ends.<br>
                1973: Final logbooks and admission registers close.
            </p>
        </div><!-- LINE 19: End of right column -->

    </div><!-- LINE 20: End of two-column grid -->

<?php
// LINE 21: Include shared footer
include 'footer.php';
?>
