<?php  
require_once("connect_sql.php");
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
// $query="INSERT INTO users (`First_Name`,`Last_Name`,`Email`,`Password`,`Gender`,`DOB`) VALUES ('$fname','$lname','$email','$password','$gender','$dob')";
$query="INSERT INTO table7 (`First_Name`,`Last_Name`,`Email`,`Password`,`Gender`,`DOB`) VALUES ('$fname','$lname','$email','$password','$gender','$dob')";

$conn->query($query);
header("Location: ../login.php");

var_dump($conn);
?>