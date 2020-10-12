<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Donation payments Webpage</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
margin:0;
padding:0;
background-color:rgb(31,74,40);
font-family:Arial,Helvetica,sans-serif;
}
.navbar{
overflow:hidden;
background-color:#333;
}
.navbar a{
float:left;
color:#f2f2f2;
text-align:center;
padding:14px 16px;
text-decoration:none;
font-size:17px;
}
.navbar a:hover{
background-color:#ddd;
color:black;
}
.navbar a.active{
background-color:#4CAF50;
color:white;}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
 background-color:white;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.thanks{
text-align:center;
}
.detail{
text-align:center;
padding:14px 16px;
text-decoration:none;
font-size:17px;}
.ftr{
padding:0;
margin:0;
background-color:rgb(94,85,85);
color:white;
text-align:center;
overflow:hidden;
}
.ftr a{
color:#f2f2f2;
text-align:center;
padding:14px 16px;
text-decoration:none;
font-size:17px;
}
.ftr a:hover{
background-color:#ddd;
color:black;
}
</style>
</head>
<body>
<div class="navbar">
<a href="#" class="active">Home</a>
<a href="#">About us</a>
<a href="#">Gallery</a>
<a href="#">Contact us</a>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="banner-mobile-english.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="post-2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="post-6.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div class="thanks">
<h1>Thank You Mr./Ms For Donation...</h1>
<h3>Enter Your Details...</h3>
</div>
<br>
<br>
<br>
<div class="detail">
<form action="details.php" method="get">
<input type="text" name="Fullname" placeholder="Enter your name..">
<input type="text" name="Email" placeholder="Enter your Email..">
<input type="text" name="Mobile" placeholder="Enter your Mobile No..">
<br><br><br>
<input type="submit">
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="ftr">
Authore:Rajesh Kumar
<br>
<br>
<a href="mailto:chandrawanshi456rajesh@gmail.com" ><i class="fa fa-envelope" style="font-size:24px; color:white;" ></i></a>
<a href="https://www.linkedln.com/in.rajesh-kumar-074429178" ><i class="fa fa-linkedin" style="font-size:24px; color:white;" ></i></a>
<a href="mailto:chandrawanshi456rajesh@gmail.com" ><i class="fa fa-instagram" style="font-size:24px; color:white;" ></i></a>
<a href="mailto:chandrawanshi456rajesh@gmail.com" ><i class="fa fa-facebook" style="font-size:24px; color:white;" ></i></a>
<br><br>
Copyright: Donation webpage 2019
</div>
</body>
</html>