<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login process</title>
    <style>
 .button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
  
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}
.button4{
  background-color: orange; 
  color: rgb(3, 18, 72);
  border: 2px solid rgb(14, 12, 12);
  
}
.button4:hover {
  background-color:blueviolet;
  color:whitesmoke;
}
h1{
    text-align: center;
    color:red;
}
</style>
</head>
<body>
<?php
require_once 'database_connection.php';

    $user_unsafe = trim($_REQUEST['username'] ?? '');
    $pass_unsafe = $_REQUEST['password'] ?? '';

    // Use PDO Prepared Statements
    $sql = "SELECT username, password FROM login WHERE username = :username LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $user_unsafe]);
    
    $row = $stmt->fetch();
   
    // Check if user exists and password matches the hash
    if($row && password_verify($pass_unsafe, $row['password']))
    {
        session_start();
        $_SESSION["id"] = $row['password']; // Note: Storing password hash in session id key to match legacy structure, though generally ids are used.
        $_SESSION["username"] = $row['username'];   
        
        header("location:home.php");
        exit();
    }
    else{
        echo "<h1>Username  Or Password Are Incorrect !!!</h1>";echo"<br>";
        echo"<div style='float:right'><button  class='button button1' onclick=\"location.href='login.php'\">login</button></div>";
        echo"<div style='float:left'><button class='button button4' onclick=\"location.href='signup.php'\">Go to sign-up</button></div>";
    }
?>
</body>
</html>