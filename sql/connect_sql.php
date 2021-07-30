<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "wtproject";
// $servername = "sql202.epizy.com";
// $username = "epiz_29247508";
// $password = "X4VmwvstMvEts";
// $database = "epiz_29247508_wtproject";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//var_dump($conn);
//$conn->close();
?>