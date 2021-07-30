
<?php 
session_start();
 if(!isset($_SESSION['login'])){
 		header("Location: ./register.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>appointment</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

	<style type="text/css">

		body {
			background-color:#ffff99 ;
		}
		#form {
			padding-left: 10px;
			height: 400px;
			width: 500px;
			color: black;
			border-style: solid;
		    position:relative; 
		    left:380px;
		    top:30px;
		    background-color:white;
		   ;
		}
	</style>
</head>
<body>
<a href="./index.php" ><i class="fa fa-fw fa-home"></i> Home</a> 
	<div id="form">
		 <form action="app_success.php" method="POST">
		<label for=>NAME <br>
			<input type="text" name="name" size="60">
		</label><br><br>

		<label for=>EMAIL <br>
			<input type="email" name="email" size="60">
		</label><br><br>

		<label for=>PHONE <br>
			<input type="text" name="phone" size="60">
		</label><br><br>

		<label for=>DATE <br>
			<input type="date" name="date" size="60">
		</label><br><br><br>

		<label for=>DEPARTMENT <br>
			<select name="department">
				<option selected>select a department</option>
				<option>Anesthetic</option>
				<option>Cardiology</option>
				<option>Gastroenterology</option>
			</select><br>

		</label><br><br>

		<input type="submit" name="submit">
		<input type="reset" name="reset">
 	</form>
 </div>
</body>
</html>

