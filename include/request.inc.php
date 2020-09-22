<?php
if(!isset($_REQUEST['submit'])){
    header("Location: http://localhost/acm/contact.html");
    exit();
}
if(empty($_REQUEST['name']) || empty($_REQUEST['email']) || empty($_REQUEST['subject']) || empty($_REQUEST['message']) ){
    header("Location: https://localhost/acm/contact.php?err=empty");
    exit();
}
require 'connect_db.inc.php';

$name = filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_REQUEST['email'], FILTER_SANITIZE_STRING);
$subject = filter_var($_REQUEST['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($_REQUEST['message'], FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO contact (name, email, subject, message) VALUES (? ,?, ?, ?)";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt, $sql)){
          //header("Location: https://localhost/acm/contact.php");
          echo "$name\n$email\n$subject\n$message";
          exit();
     }
     else{
          mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);
          mysqli_stmt_execute($stmt);
          //echo "$name\n$email\n$subject\n$message";
          header("Location: https://localhost/acm/contact.php?err=noerr");
          exit();
     }
     mysqli_close($conn);

