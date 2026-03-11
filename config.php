<?php
// ============================================================
// FILE: config.php
// PURPOSE: Database connection settings - edit this file to
//          match your MySQL server credentials
// USED BY: Page 5.php, Page 6.php (the database pages)
// ============================================================

// LINE 1: Your MySQL hostname - usually 'localhost' on a local server
define('DB_HOST', 'localhost');

// LINE 2: Your MySQL username - change to match your setup
define('DB_USER', 'root');

// LINE 3: Your MySQL password - change to match your setup
define('DB_PASS', '');

// LINE 4: The database name - must match what you create in MySQL
define('DB_NAME', 'marshfield_history');

// LINE 5: PHP timezone - change to your local timezone if needed
date_default_timezone_set('Europe/London');

// ============================================================
// DATABASE CONNECTION FUNCTION
// PURPOSE: Returns a MySQLi connection, or dies with an error message
// ============================================================
function getDB() {
    //Create the database connection using the settings above
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Check for connection errors
    if ($conn->connect_error) {
        die('<div style="background:#fff0f0;border:2px solid red;padding:20px;margin:20px;font-family:serif;">
            <strong>Database Connection Error</strong><br>
            Could not connect to MySQL: ' . htmlspecialchars($conn->connect_error) . '<br><br>
            <strong>To fix this:</strong><br>
            1. Make sure MySQL / XAMPP / WAMP is running.<br>
            2. Check the credentials in <code>config.php</code>.<br>
            3. Make sure you have run <code>staff.sql</code> and <code>sources.sql</code> to create the database tables.
        </div>');
    }

  
    $conn->set_charset('utf8mb4');

    return $conn;
}
?>



