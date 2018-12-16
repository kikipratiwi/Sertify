<?php

  include 'config.php';
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $pass = mysqli_real_escape_string($db,$_POST['pass']); 
    
    $sql = "SELECT name,id FROM users WHERE email = '$email' and password = '$pass'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
  
    if($count == 1) {
      $_SESSION['login'] = true;
      $_SESSION['name'] = $row['name'];
      $_SESSION['id'] = $row['id'];
       header("location: dashboard-status.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
 }

?>