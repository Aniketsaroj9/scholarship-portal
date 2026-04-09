<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1. Create Database
$sql = "CREATE DATABASE IF NOT EXISTS login_db";
if ($conn->query($sql) === TRUE) {
    echo "Database login_db created successfully or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// 2. Select Database
$conn->select_db("login_db");

// DROP TABLES to force recreation
$conn->query("DROP TABLE IF EXISTS reg");
$conn->query("DROP TABLE IF EXISTS login");
$conn->query("DROP TABLE IF EXISTS chek");
echo "Tables dropped.<br>";

// 3. Create login table
$sql = "CREATE TABLE IF NOT EXISTS login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mobilno VARCHAR(20),
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table login created successfully.<br>";
} else {
    echo "Error creating table login: " . $conn->error . "<br>";
}

// 4. Create reg table
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
    echo "Table reg created successfully.<br>";
} else {
    echo "Error creating table reg: " . $conn->error . "<br>";
}

// 5. Create chek table
$sql = "CREATE TABLE IF NOT EXISTS chek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    schol VARCHAR(100),
    money DECIMAL(10, 2),
    cast VARCHAR(20)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table chek created successfully.<br>";
} else {
    echo "Error creating table chek: " . $conn->error . "<br>";
}

// 6. Insert data into chek
$sql = "INSERT INTO chek (schol, money, cast) VALUES 
('Tribual Development Department', 200000, 'ST'),
('Directorate of higher education', 500000, 'OPEN'),
('Directorate of technical education', 800000, 'OBC'),
('VJNT,OBC and SBC Welfare Department', 100000, 'VJNT'),
('Social Justice and Special Assistance', 250000, 'SC')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted into chek successfully.<br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

echo "<h3>Current Tables:</h3>";
$result = $conn->query("SHOW TABLES");
if ($result->num_rows > 0) {
    while($row = $result->fetch_row()) {
        echo $row[0] . "<br>";
    }
} else {
    echo "No tables found!";
}

$conn->close();
?>
