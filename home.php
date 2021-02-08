<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home - FIT`BUFF </title>
<link href="commanpro.css" rel="stylesheet" />

<style>
.txt
{
	color: #f2f2f2;
  	font-size:28px;
  	padding: 8px 12px;
  	bottom: 8px;
 	width:95.2%;
  	height:90px;
	margin-bottom:-2%;
	opacity:0.7;	
	background-color:#FF5534;
	position:absolute;
	cursor:pointer;

}
.txt:hover
{
	height:120px;
	transition: all 0.2s ease-in-out;
	opacity:1;
}
#middle
{
	
	height:550px;
	width:100%;
	background-color:#1F2631;
	 

}
#middlel
{
	font-size:40px;
	font-variant:small-caps;
	margin-left:10%;
	margin-top:-2%;
	color:#FF5534;
	width:40%;
	float:left;
}
#nm
{
	color:#FFF;
	font-size:60px;
	position:absolute;
	
}
#middler
{
	width:49%;
	float:left;
	height:100%;
	float:right;
	
	}
#wall
{
	height:100%;
	width:100%;
}
#bottom1
{
	height:300px;
	width:100%;
	
}
#b1,#b2,#b3
 {
	width:33.3%;		
	float:left;
	height:300px;
	margin-left:%;
	position:relative;
}
#botimg
{
	height:300px;
	width:100%;	
}

</style>
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
    <li id="menuid"><a id="menub" href="gallery.php"/>Gallery</a></li>
    <li id="menuid"><a id="menub" href="shop.php"/>Shop</a></li>
    <li id="menuid"><a id="menub" href="plans.php"/>Plans</a></li>
    <li id="menuid"><a id="menub" href="services.php"/>Services</a></li>
    <li id="menuid"><a id="menub" href="contact.php"/>Contact</a></li>
                

	</ul></div>
	</div>
<div id="middle">
	<div id="middlel"><br />Membership starts from<br />
<span style="font-size:90px;color:#FFF">₹ 5999</span><br />
<br />
<span id="nm">BE PART OF THE <br /><span style="color:#FF5534;font-size:160px">TEAM</span>.</span>
    </div>
    <div id="middler"><img id="wall" src="lazar.jpg" /></div>
</div>
<div id="blank"></div>
<div id="bottom1">
		<div id="b1"><img id="botimg" src="trainer.jpg" />
        <div onclick="window.location='services.html'" class="txt">Certified Trainers</div>
        </div>
		
        <div id="b2"><img id="botimg" src="membership.jpg" />
        <div onclick="window.location='registration.php'" class="txt">Membership Plans</div>
        
		</div>
        <div id="b3"><img id="botimg" src="shop.jpg" />
        <div onclick="window.location='shop.html'" class="txt">Top Supplements</div></div>
		
</div>
<hr />
<div id="footer">
		<div id="f1"><h2 style="color:#FF5534;">About Us</h2>
        We are one of the most awarded and largest fitness centres. We have highly equiped gym and also shop with wide range of products.<br /><br />

I-D,J.N.V,Bikaner<br /><br />

fitbuff@gmail.com<br /><br />

</div>
		<div id="f2"><img src="logo2.png" /></div>
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