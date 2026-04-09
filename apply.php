<?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname='login_db';
 
 $con=mysqli_connect($servername,$username,$password,$dbname);

 $query=mysqli_query($con,"SELECT * FROM reg ORDER BY id DESC LIMIT 1")or die(mysqli_error($con));
    
 $counter=mysqli_num_rows($query);

 $row=mysqli_fetch_assoc($query);

 if ($row) {
    echo "First Name: " . $row['firstname'];
    echo"<br><br>";
    echo "Middle Name: " . $row['middelname'];
    echo"<br><br>";
    echo "Last Name: " . $row['lastname'];
    echo"<br><br>";
    echo "Email: " . $row['email'];
    echo"<br><br>";
    echo "Mobile: " . $row['mobilno'];
    echo"<br><br>";
    echo "Country: " . $row['country'];
    echo"<br><br>";
    echo "Caste: " . $row['cast'];
    echo"<br><br>";
    echo "Qualification (Graduation): " . $row['qualification'];
    echo"<br><br>";
    echo "Current Status: " . $row['current'];
    echo"<br><br>";
    echo "State: " . $row['state'];
    echo"<br><br>";
    echo "Scheme: " . $row['schol'];
    echo"<br><br>";
 } else {
     echo "No applications found.";
 }
echo"<br>";
echo"<br>";








?>



