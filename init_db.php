<?php
// init_db.php - Initializes the database layout
$servername = "localhost";
$username = "root";
$password = "";

try {
    // Connect WITHOUT specifying a dbname initially so we can create it if it doesn't exist
    $dsn = "mysql:host=$servername;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $pdo = new PDO($dsn, $username, $password, $options);

    // Read SQL file
    $sql = file_get_contents('setup.sql');
    if (!$sql) {
        die("Error reading setup.sql. Ensure the file exists in the same directory.");
    }

    echo "Database initialization started...<br>";

    // Execute the SQL file statements
    // PDO::exec executes an SQL statement in a single function call, returning the number of rows affected. 
    // It is capable of executing multiple queries at once depending on driver (MySQL allows it natively here).
    $pdo->exec($sql);
    
    echo "Database initialized successfully.<br>";

} catch (PDOException $e) {
    echo "Error initializing database: " . $e->getMessage();
}
?>
