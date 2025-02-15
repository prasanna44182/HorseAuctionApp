<?php
// Database connection settings
$servername = "sql112.infinityfree.com"; // MySQL hostname from InfinityFree
$username = "if0_37831446";              // MySQL username from InfinityFree
$password = "Yankee3330";                // MySQL password from InfinityFree
$dbname = "if0_37831446_horse_auction_db"; // Database name from InfinityFree

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully.<br>";
}
?>
