<?php
//connecting to Database
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "acm";
//$dbpassword = "Qmb]4*)m^o%sbBYV"; for 000webhost
//$dbpassword = "AuT$^ygv0+F(+b*?" for dist-acm 000webhots
//$dbname = "id13529954_acm"; for 000webhost
//$dbname = "id13715856_acm"; for dist-acm 000webhost

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if(!$conn){
     die("Error Accessing Database ");
}
?>