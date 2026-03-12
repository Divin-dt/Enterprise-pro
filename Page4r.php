<?php
// ============================================================
// FILE: Page4r.php
// PURPOSE: Logbook — Page 4r - page index table linking to document images.
// PARENT PAGE: Page_4.php
// ============================================================

// LINE 1: Set browser tab title
$page_title = 'Marshfield School History - Logbook — Page 4r';

// LINE 2: Highlight the Marshfield School nav button (button 4)
$active_nav = 4;

// LINE 3: Include shared header
include 'header.php';
?>

    <!-- PAGE Page4r - MAIN CONTENT -->

    <!-- LINE 4: Centred content wrapper -->
    <div class="content-full">

        <div class="table-section">

            <!-- LINE 5: Section heading
                 INSTRUCTION: To change the heading, edit the text inside <h2> below -->
            <h2>Logbook — Page 4r</h2>

            <!-- LINE 6: Info box -->
            <div class="info-box">
                Click any page number to view it. Images are in:
                <code>Images/</code><br>
                — Add hyperlinks using the Instruction Manual.
            </div>

            <!-- LINE 7: Page index table
                 INSTRUCTION: Replace each # with the correct viewer link.
                 Format: viewer.php?file=Images/Page_01.jpg&back=Page4r.php
                 Add more <tr> rows of 10 cells as needed. -->
            <table class="page-table">
                <tbody>
                        <tr><td><a href="#">Page 208</a></td><td><a href="#">Page 209</a></td><td><a href="#">Page 210</a></td><td><a href="#">Page 211</a></td><td><a href="#">Page 212</a></td><td><a href="#">Page 213</a></td><td><a href="#">Page 214</a></td><td><a href="#">Page 215</a></td><td><a href="#">Page 216</a></td><td><a href="#">Page 217</a></td></tr>
                        <tr><td><a href="#">Page 218</a></td><td><a href="#">Page 219</a></td><td><a href="#">Page 220</a></td><td><a href="#">Page 221</a></td><td><a href="#">Page 222</a></td><td><a href="#">Page 223</a></td><td><a href="#">Page 224</a></td><td><a href="#">Page 225</a></td><td><a href="#">Page 226</a></td><td><a href="#">Page 227</a></td></tr>
                        <tr><td><a href="#">Page 228</a></td><td><a href="#">Page 229</a></td><td><a href="#">Page 230</a></td><td><a href="#">Page 231</a></td><td><a href="#">Page 232</a></td><td><a href="#">Page 233</a></td><td><a href="#">Page 234</a></td><td><a href="#">Page 235</a></td><td><a href="#">Page 236</a></td><td><a href="#">Page 237</a></td></tr>
                        <tr><td><a href="#">Page 238</a></td><td><a href="#">Page 239</a></td><td><a href="#">Page 240</a></td><td><a href="#">Page 241</a></td><td><a href="#">Page 242</a></td><td><a href="#">Page 243</a></td><td><a href="#">Page 244</a></td><td><a href="#">Page 245</a></td><td><a href="#">Page 246</a></td><td><a href="#">Page 247</a></td></tr>
                        <tr><td><a href="#">Page 248</a></td><td><a href="#">Page 249</a></td><td><a href="#">Page 250</a></td><td><a href="#">Page 251</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    </tbody>
            </table>

            <!-- LINE 8: Back navigation buttons -->
            <div class="page-nav">
                <a href="Page_4.php">&#8592; Back to Marshfield School</a>
                <a href="Page_1.php">&#8962; Home</a>
            </div>

        </div>

    </div><!-- LINE 9: End of content-full -->

<?php
// LINE 10: Include shared footer
include 'footer.php';
?>
