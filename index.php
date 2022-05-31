<!DOCTYPE html>
<html lang="en">
<head>
<title>online voting sysytem</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
</head>
<body style="background-color:#008080">
<div id="022" class="myDiv22">
<h1 >Kisii University Online Voting System</h1>
</div>


<div id="001" class="myDiv">

<div class="slideshow-container" style="border-radius:25px">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="gatekisii.jpg" style="width:530px"  style="border-radius:25px">
  <div class="text">Fon Scientae</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="ictkisii.jpg" style="width:530px"  style="border-radius:25px">
  <div class="text">Our state of the art ICT.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="sakagwakisii.jpg" style="width:530px"  style="border-radius:25px">
  <div class="text">Graduation square</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="ictkisii2.jpg" style="width:530px" style="border-radius:25px">
  <div class="text"> School of Information Sciences </div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="librarykisii.jpg" style="width:530px"  style="border-radius:25px">
  <div class="text">Our main library</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="pavillionkisii.jpg" style="width:530px"  style="border-radius:25px">
  <div class="text">Chancellor's Pavillion</div>
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<div class="rightbox" style="border-radius:25px">
      <p><h6 style="color:white"><q>So now it is up to all of us who can vote to exercise that right,a right that people around the world and here in our own country have fought and died for. It is our single greatest responsibility as citizens, particularly as educated citizens who understand the privilege of self-governance and how dearly others have paid to earn us our votes.</q> <br><br>-Dr Tony Frank. <br>Chancellor, Colorado State University.</h6>                  


</div>
</div>
<div id="002" class="myDiv2">
<button class="button button1" onclick="document.location='loginpage.php' ">Voters Login</button>
<button class="button button2" onclick="document.location='http://localhost/FinalProject/admin/index.php'">Admin Login</button>
<button class="button button2" onclick="document.location='http://localhost/FinalProject/admin/mainadminlogin.php'"> Main Admin Login</button>
</div>

<div id="footer " class="footer">
<center><h6>Copyright 2022 Kisii University.All rights reserved.</h6></center>
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
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>
</body>
</html>
