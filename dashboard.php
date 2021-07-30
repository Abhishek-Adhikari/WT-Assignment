<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style type="text/css">
		h4 {
			color: red;
		}

		h1 {
			color: green;
		}
	</style>
</head>
<body>
<h1>LOGGED IN SUCCESSFULLY </h1>
<br><br><br>
<h4>Click here to jump into home page.</h4>
<a href="index.php">HOME</a>




<h4>Click here to log out.</h4>
<form action="login.php" method="post">
	<input type="hidden" name="reset">
	<input type="submit" value="Log Out" />
</form>
</body>
</html>

 