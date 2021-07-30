<?php 
 // require_once("./home.html");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title>profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
    padding-top: 80px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background: lightcyan;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: greenyellow;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>

 
 <body>

    <a href="./index.php" ><i class="fa fa-fw fa-home"></i> Home</a> 
    
    <h2 style="text-align:center">Profile</h2>

<div class="card">
  <img src="./images/prof.jpg" alt="photo" style="width:100%">
  <h1><?= $_POST["fName"] ?></h1>
  <p class="title"> <?= $_POST["title"]  ?></p>
  <p><?= $_POST["contact"]  ?></p>
  <div style="margin: 24px 0;">
   <a href="#"><i class="fa fa-facebook"></i></a> 
   
    <a href="#"><i class="fa fa-linkedin"></i></a> 
       <a href="#"><i class="fa fa-instagram"></i></a> 
    
  </div>
  <p><button onclick="func()">Contact</button></p>
</div>

    <script type="text/javascript">
        function func()
        {
            alert("Calling.... <?= $_POST["contact"]  ?>")
        }
    </script>
 </body>
 </html>