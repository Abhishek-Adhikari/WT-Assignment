<?php
session_start();
if(count($_POST)>0){
	session_destroy();
}else if(isset($_SESSION["login"])){
	 header("Location: dashboard.php");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

	<style type="text/css">
		#form {
			font-size: 18px;
			padding-top: 20px;
			padding-left: 10px;
			height: 200px;
			width: 300px;
			color: white;
			border-style: solid;
		    position:relative; 
		    left:480px;
		    top:140px;
		    background-color:darkcyan;">
		}
	</style>
</head>
<body>
	<a href="./index.php" ><i class="fa fa-fw fa-home"></i> Home</a> 
<form   id="form"   action="./sql/verify.php" method="post"><br>
	<label for=email>Email</label>
	<input type="email" id="email" placeholder="email" name="email" size="35">
	<br><br>
	<label for=password>Password</label><br>
	<input type="password" id="password" placeholder="password" name="password" size="35">
	<br><br><br>
	----------------<input type="Submit" value="login">
	<input type="reset">------------------
</form>
</body>
</html>