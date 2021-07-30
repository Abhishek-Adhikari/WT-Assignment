<?php 

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>random</title>
</head>
<body>


 

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<style type="text/css">
.form{
  font-family: 'Open Sans Condensed', arial, sans;
  width: 500px;
  padding: 30px;
  background: #FFFFFF;
  margin: 50px auto;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
  -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
  -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}

.form input[type="text"],
.form input[type="date"],
.form input[type="datetime"],
.form input[type="email"],
.form input[type="number"],
.form input[type="search"],
.form input[type="time"],
.for input[type="url"],
.form input[type="password"],
.form textarea,
.form select 
{
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  outline: none;
  display: block;
  width: 100%;
  padding: 7px;
  border: none;
  border-bottom: 1px solid #ddd;
  background: transparent;
  margin-bottom: 10px;
  font: 16px Arial, Helvetica, sans-serif;
  height: 45px;
}
.form textarea{
  resize:none;
  overflow: hidden;
}
.form input[type="button"], 
.form input[type="submit"]{
  -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
  -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
  box-shadow: inset 0px 1px 0px 0px #45D6D6;
  background-color: #2CBBBB;
  border: 1px solid #27A0A0;
  display: inline-block;
  cursor: pointer;
  color: #FFFFFF;
  font-family: 'Open Sans Condensed', sans-serif;
  font-size: 14px;
  padding: 8px 18px;
  text-decoration: none;
  text-transform: uppercase;
}
.form input[type="button"]:hover, 
.form input[type="submit"]:hover {
  background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
  background-color:#34CACA;
}
</style>
<script type="text/javascript">
  function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>


  <div class="form">
    <form method="POST" action="./profile.php">
      Name:<input type="text" name="fName"><br>
      Post/Title: <input type="text" name="title"><br>
      Contact:
      <input type="number" name="contact"><br>
       <label for="img">Select image:</label><br>
      <input type="file" id="image" name="image"
      accept="image/*"><br><br>
      <input type="submit"><br>
    </form>
  </div>
 </body>
</html>  

