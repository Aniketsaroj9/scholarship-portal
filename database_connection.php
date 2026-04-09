<?php
// Centralized Database Connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'login_db';

try {
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions on error
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Return associative arrays 
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Use real prepared statements
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // TEMPORARY: Legacy mysqli connection to prevent application from breaking 
    // before Phase 2 and Phase 3 modernize all processing scripts.
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if (!$con) {
        die("Legacy connection failed: " . mysqli_connect_error());
    }

} catch (PDOException $e) {
    // Hide raw database errors from the user in production, but we keep a generic catch for now.
    die("Database connection failed: " . $e->getMessage());
}
?>