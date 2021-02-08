<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery - FIT`BUFF</title>
<link href="commanpro.css" rel="stylesheet" />
<link href="galleryslide.css" rel="stylesheet" />
<script src="login.js"></script>
</head>


<body style="font-family:Tahoma, Geneva, sans-serif">
<?php
	include"comlogin.php";
?>

<div id="head">
	<div id="top">
	<button id="t1"onclick=" window.open('https://goo.gl/maps/DPar3tbrLHp','_blank') ">&#x2726; I-D , J.N.V,Bikaner</button> 
	<button id="t2" onclick="location.href='mailto:fitbuff@gmail.com';"> &#9993; fitbuff@gmail.com</button>
    <button id="t3">&#9990; +91-9251111128</button>
    
    
    <div class="dropdown" style="float:right">
    <button onclick="myFunction()" id="t4" class="dropbtn">LOGIN</button>
  	<div id="myDropdown" class="dropdown-content">
  	<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="margin-top:10px; margin-left:30px">
Username<input name="usr" type=text style="width:80%; height:22px; box-shadow: 1px 1px 3px #1F2631 inset
        "/>

    Password<input name="pass" type="password" style="width:80%; height:22px; box-shadow: 1px 1px 3px  #1F2631 inset" />
	<a id="forget" href="forget.html">Forget Password ?</a>
    <?php if (isset($err)): ?>

		Incorrect

<?php endif; ?>
    <input type="submit" name="sblogin" value="Login" style="color:#FFF; background-color:#FF5534; border:#FF5534;height:25px; width:60px; border-radius:3px; cursor:pointer;font-size:18px;margin-left:60%; box-shadow: 1px 1px 10px  #FFF inset" />

    </form>
  </div>
  </div>
   <a href="registration.php" id="t5">SIGNUP</a>
    </div>
	<div id="mid">
	<img id="logo" src="fitbuff.png" /></div>
		<div id="menu">
	<ul id="list">
	<li id="menuid"><a id="menub" href="home.php"/>Home</a> </li>
    <li id="menuid" style="background-color:#333;
	color:#FF5534;
	transition: all 0.4s ease-in-out;
	border-bottom:solid #FFF;
	padding-bottom:2px"><a id="menub" href="gallery.php"/>Gallery</a></li>
    <li id="menuid"><a id="menub" href="shop.php"/>Shop</a></li>
    <li id="menuid"><a id="menub" href="plans.php"/>Plans</a></li>
    <li id="menuid"><a id="menub" href="services.php"/>Services</a></li>
    <li id="menuid"><a id="menub" href="contact.php"/>Contact</a></li>
                

	</ul></div>
	</div>
    <div style="height:800px; width:100%; background-color:#1F2631">
<div  class="slideshow-container">

<div class="mySlides fade">

  <img id="imgs" src="Images/1.jpg">
  <div class="text">Relaxed Atmosphere</div>
</div>
<div class="mySlides fade">

  <img id="imgs" src="Images/9.png">
  <div class="text">Expert Trainers</div>
</div>
<div class="mySlides fade">

  <img id="imgs" src="Images/10.png">
  <div class="text">Fitness Consultants</div>
</div>


<div class="mySlides fade">

  <img id="imgs" src="Images/2.jpg">
  <div class="text">High Class Equipments</div>
</div>

<div class="mySlides fade">

  <img id="imgs" src="Images/3.jpg">
  <div class="text">Good Interior</div>
</div>
<div class="mySlides fade">

  <img id="imgs" src="Images/4.jpg">
  <div class="text">Yoga Classes</div>
</div>	
<div class="mySlides fade">

  <img id="imgs" src="Images/5.jpg">
  <div class="text">Good Interior</div>
</div>
<div class="mySlides fade">

  <img id="imgs" src="Images/6.jpg">
  <div class="text">Good Interior</div>
</div>
<div class="mySlides fade">

  <img id="imgs" src="Images/7.jpg">
  <div class="text">Good Interior</div>
</div>
<div class="mySlides fade">

  <img id="imgs" src="Images/8.jpg">
  <div class="text">Good Interior</div>
</div>



</div>
<br>
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
    if (slideIndex> slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

<hr/>
<!--FOOTER-->
<div id="footer">
		<div id="f1"><h2 style="color:#FF5534;">About Us</h2>
        We are one of the most awarded and largest fitness centres. We have highly equiped gym and also 		shop with wide range of products.<br /><br />

		I-D,J.N.V,Bikaner<br /><br />

		fitbuff@gmail.com<br /><br />

		</div>
		
        <div id="f2"><img src="logo2.png" />
        </div>
        
        <div id="f3"><h2 style="color:#FF5534;">Stay in Touch</h2>
        To stay in touch with us and get informed
for latest updates and promotions, just
type your email below.<br /><br />

<?php
	include"subscribe.php";
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="email" style="height:20px; width:220px" /><br /><br /><br />
<input type="submit" name="sbsubs" value="Subscribe" style="color:#FFF; background-color:#FF5534; border:#FF5534;height:40px; width:95px; border-radius:5px; cursor:pointer;font-size:18px"  />
</form>
		</div>
</div>
</body>
</html>