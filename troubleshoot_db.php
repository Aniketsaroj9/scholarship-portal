<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Database Troubleshooter</h1>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

// 1. Check Connection
echo "<h2>1. Connecting to Database...</h2>";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("<div style='color:red'>Connection failed: " . $conn->connect_error . "</div>");
}
echo "<div style='color:green'>Connected successfully to '$dbname'.</div>";

// 2. Check Tables
echo "<h2>2. Checking Tables...</h2>";
$result = $conn->query("SHOW TABLES");
if ($result) {
    echo "Files found in database:<br>";
    echo "<ul>";
    while ($row = $result->fetch_array()) {
        echo "<li>" . $row[0] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<div style='color:red'>Error listing tables: " . $conn->error . "</div>";
}

// 3. Check & Fix 'reg' Table
echo "<h2>3. Checking 'reg' Table...</h2>";
$check_reg = $conn->query("SELECT count(*) as count FROM reg");
if ($check_reg) {
    $row = $check_reg->fetch_assoc();
    echo "Row count in 'reg': " . $row['count'] . "<br>";
    
    // Show Data
    $data = $conn->query("SELECT * FROM reg");
    if ($data->num_rows > 0) {
        echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>Firstname</th><th>Email</th><th>Mobile</th></tr>";
        while ($d = $data->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $d['id'] . "</td>";
            echo "<td>" . $d['firstname'] . "</td>";
            echo "<td>" . $d['email'] . "</td>";
            echo "<td>" . $d['mobilno'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Table 'reg' is empty.<br>";
    }
} else {
    echo "<div style='color:red'>Error checking 'reg' table: " . $conn->error . "</div>";
    // Attempt to create if missing
    $sql = "CREATE TABLE IF NOT EXISTS reg (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50),
        middelname VARCHAR(50),
        lastname VARCHAR(50),
        email VARCHAR(100),
        mobilno VARCHAR(20),
        country VARCHAR(50),
        cast VARCHAR(20),
        qualification VARCHAR(50),
        current VARCHAR(50),
        state VARCHAR(50),
        schol VARCHAR(100)
    )";
    if ($conn->query($sql) === TRUE) {
        echo "<div style='color:green'>Created 'reg' table.</div>";
    } else {
        echo "<div style='color:red'>Failed to create 'reg' table: " . $conn->error . "</div>";
    }
}

// 4. Test Insertion
echo "<h2>4. Testing Data Insertion...</h2>";
$test_name = "DebugUser_" . rand(1000,9999);
$sql = "INSERT INTO reg (firstname, email, mobilno) VALUES ('$test_name', 'debug@test.com', '1234567890')";
if ($conn->query($sql) === TRUE) {
    echo "<div style='color:green'>Successfully inserted test record: $test_name</div>";
    echo "<b>Please check the table list above (refresh the page) to see it.</b>";
} else {
    echo "<div style='color:red'>Error inserting test record: " . $conn->error . "</div>";
}

$conn->close();
?>
