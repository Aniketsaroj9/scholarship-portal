<?php
require_once 'database_connection.php';

  $firstname=$_POST['name'];
  $middname=$_POST['mid'];
  $lastname=$_POST['last'];
  $email=$_POST['email'];
  $mobilno=$_POST['mobile_number'];
  $country=$_POST['country'];
  $cast=$_POST['caste'];
  $qualification=$_POST['graduation'];
  $current=$_POST['qualification'];
  $state=$_POST['state'];
  $schol=$_POST['scheme'];
     

  $sql="INSERT INTO `reg` (`firstname`, `middelname`, `lastname`, `email`, `mobilno`, `country`, `cast`,
   `qualification`, `current`, `state`, `schol`) VALUES ('$firstname', '$middname', ' $lastname', '$email', '$mobilno','$country',
   '$cast','$qualification','$current','$state','$schol')"; 
  
   // Debug Logging
   file_put_contents('debug_log.txt', "REGIS_PROCC: Received POST: " . print_r($_POST, true) . "\nSQL: $sql\n", FILE_APPEND);

  $result=mysqli_query($con,$sql);
  
  if ($result) {
      file_put_contents('debug_log.txt', "REGIS_PROCC: Success\n", FILE_APPEND);
  } else {
      file_put_contents('debug_log.txt', "REGIS_PROCC: Error: " . mysqli_error($con) . "\n", FILE_APPEND);
  }
  if($result)
  {
     
      echo"<script type='text/javascript'>
      alert('REGISTER SUCCESHULLY');
      window.location.href='home.php';
      </script>";
  }
  else{
      echo "REGISTER Failed: " . mysqli_error($con);
  }



?>