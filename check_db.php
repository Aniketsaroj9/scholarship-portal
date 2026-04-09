<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL server.<br>";

// Check if database exists
$db_selected = mysqli_select_db($conn, $dbname);
if (!$db_selected) {
    die("Database '$dbname' does not exist or cannot be selected: " . mysqli_error($conn));
}
echo "Database '$dbname' selected successfully.<br>";

// List tables
echo "<h3>Tables in $dbname:</h3>";
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["Tables_in_" . $dbname] . "</li>";
    }
    echo "</ul>";
} else {
    echo "0 tables found in database '$dbname'.";
}

$conn->close();
?>
