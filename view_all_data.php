<!DOCTYPE html>
<html>
<head>
    <title>Database Content View</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h2 { color: #333; }
    </style>
</head>
<body>
    <h1>Database Content Debugger</h1>
    <button onclick="location.reload()">Refresh Data</button>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("<h3 style='color:red'>Connection failed: " . $conn->connect_error . "</h3>");
    }

    // LOGIN TABLE
    echo "<h2>Table: login (User Accounts)</h2>";
    $sql = "SELECT * FROM login";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Mobile</th><th>Username</th><th>Password</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['mobilno'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No data in login table.</p>";
    }

    // REG TABLE
    echo "<h2>Table: reg (Scholarship Applications)</h2>";
    $sql = "SELECT * FROM reg";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Mobile</th><th>Caste</th><th>Scheme</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['mobilno'] . "</td>";
            echo "<td>" . $row['cast'] . "</td>";
            echo "<td>" . $row['schol'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No data in reg table.</p>";
    }

    // LOG FILE
    echo "<h2>Debug Log File (Last 20 lines)</h2>";
    if (file_exists('debug_log.txt')) {
        $lines = file('debug_log.txt');
        $last_lines = array_slice($lines, -20);
        foreach ($last_lines as $line) {
             echo htmlspecialchars($line) . "<br>";
        }
    } else {
        echo "<p>No debug_log.txt found.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
