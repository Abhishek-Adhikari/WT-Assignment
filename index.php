<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>HOME</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<style >
  body {font-family: Arial, Helvetica, sans-serif;}

.title {
  float: left;
  padding-top: 12px;
  text-align: center;
  background-color: black;
  color: red;
  width: 30%;
  font-size: 20px;
  height: 44px;
}

.navbar {
  float: right;
  width: 70% ;
  background-color: #999;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: black;
}

.active {
  background-color: darkred;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}




/*===========================================*/

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}


/*footer=========================================*/

*,*:before,*:after{
  box-sizing: border-box;
}

footer{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-flow: row wrap;
  padding: 50px;
  color: #fff;
  background-color: #011c39;
}

.footer > *{
  flex: 1 100%;
}

.footer-left{
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer-left img{
  width: 50%;
}

h2{
  font-weight: 600;
  font-size: 17px;
}

.footer ul{
  list-style: none;
  padding-left: 0;
}

.footer li{
  line-height: 2em;
}

.footer a{
    text-decoration: none;
}

.footer-right{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-flow: row-wrap;
  padding-left: 20px;
}

.footer-right > *{
  flex:  1 50%;
  margin-right: 1.25em ;
}

.box a{
  color: #999;
}

.footer-bottom{
  text-align: center;
  color: #999;
  padding-top: 50px;
}

.footer-left p{
  padding-right: 20%;
  color: #999;
}

.socials a{
  background: #364a62;
  width: 40px;
  height: 40px;
  display: inline-block;
  margin-right: 10px;
}

.socials a{
  color: #e7f2f4;
  padding: 10px 12px;
  font-size: 20px;
}

@media screen and (min-width: 600px){
  .footer-right > *{
    flex: 1;
  }
  .footer-left{
    flex: 1 0px;
  }
  .footer-right{
    flex: 2 0px;
  }
}

@media (max-width: 600px){
  .footer{
    padding: 15px;
  }
  main{
    font-size: 55px;
  }
}
</style>


<body>
<br>
<div class="title">XYZ HOSPITAL AND RESEARCH CENTRE</div> 
<div class="navbar">
  <a class="active" href="index.php" ><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="departments.html"><i class="fa fa-fw fa-search"></i> Departments</a> 
    <a href="doctors/doctors.php"><i class="fa fa-fw fa-address-book"></i> Doctors</a>
    <a href="appointment.php"><i class="fa fa-fw fa-sign-in"></i>Appointment</a>
  <a href="./dataEntry.php"><i class="fa fa-fw fa-user"></i> About</a>
  <a href="register.php"><i class="fa fa-fw fa-registered"></i> Register</a>
  <a href="login.php"><i class="fa fa-fw fa-sign-in"></i> LOG IN</a>

</div>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br>

<!-- image slideshow
 -->
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="./images/image7.jpg" style="width:100%">
    <div class="text">After a successful operation</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="./images/img0.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="./images/img1.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script type="text/javascript">
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<br><br><br>
<!--three columns- contact,appointment,hours
 -->
          <footer class="footer">

   <div class="footer-right">
    <div id="head">EMERGENCY CONTACT  <br><br>
    061-400065 <br>
    1-234-567-8910
    </div>

   <div class="footer-left">
    <div id="head">DOCTOR APPOINTMENT </div> <br>
    <a href="appointment.php"><button type="button" onclick="" id="button">BOOK AN APPOINTMENT</button>
    </a><br><br>
    ********
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-youtube"></a>
    <a href="#" class="fa fa-instagram"></a>*******
   </div>

   <div class="footer-left">
    <div id="head">OPENING HOURS  <br><br>
    <ul><li>Saturday 10:00 - 17:00</li> 
    <li>Sunday-Friday 10:00 - 21:00 </li> 
    </ul></div>   
   </div>
 </div>
</footer>
 <div class="footer-bottom"><center>
            &copy; <span> be2019se655</span>. <span>All rights reserved</span></center>
          </div>

</body>
</html>