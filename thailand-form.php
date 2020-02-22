<?php
  session_start();
  //connect to database
  $db=mysqli_connect("localhost", "root", "", "Contact_details"); 
  if (isset($_POST['send'])) {

    $name = mysql_real_escape_string($_POST['name']);
    $email = mysql_real_escape_string($_POST['email']);
    $phone = mysql_real_escape_string($_POST['phone']);
    $company = mysql_real_escape_string($_POST['company']);
    $designation = mysql_real_escape_string($_POST['designation']);
    $message = mysql_real_escape_string($_POST['message']);

    $error_msg = "";
    $name_exp = "/^[A-Za-z.'-]+$/";
    if (!preg_match($name_exp, $name)) {
      $error_msg = "The entered name is not valid";    
    }

    $email_exp="/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";

    $sql = "INSERT INTO Contact_Thailand(name,email,phone,company,designation,message) VALUES('$name', '$email', '$phone', '$company', '$designation', '$message')";
    if (mysqli_query($db,$sql)) {
      echo "Success! Message Recieved";
      
    }
    
  }

?>

