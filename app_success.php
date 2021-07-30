<?php  
require_once("./appointment.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>appointment success</title>
</head>
<body>
 <h1>appointment registered as:</h1>



 <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Appointment Date</th>
        </tr>
        <tr>
            <td><b><?= $_POST["name"] ?> </b></td>
            <td><b><?= $_POST["email"] ?></b></td>
            <td><b><?= $_POST["phone"] ?></b></td>
            <td><b><?= $_POST["date"] ?></b></td>
        </tr>
 </table>
 




<!--  Name: <b><?= $_POST["name"] ?> </b><br>
 Email: <b><?= $_POST["email"] ?></b><br>
 Phone No: <b><?= $_POST["phone"] ?></b><br>
 Appointment Date: <b><?= $_POST["date"] ?></b> -->
</body>
</html>

