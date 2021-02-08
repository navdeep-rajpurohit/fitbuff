<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Services - FIT`BUFF</title>
<link href="commanpro.css" rel="stylesheet" />
<script src="caloriecalc.js"></script>
<style>
#i1,#i2
{
	width:49%;
	float:left;
	margin-left:1%;
}
	
#left,#right
{
	padding:18%;
	margin-left:-5%;
	margin-top:-6%;
}
	
h3
{
	color:#FF5534;
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
    <li id="menuid" style="background-color:#333;
	color:#FF5534;
	transition: all 0.4s ease-in-out;
	border-bottom:solid #FFF;
	padding-bottom:2px"><a id="menub" href="services.php"/>Services</a></li>
    <li id="menuid"><a id="menub" href="contact.php"/>Contact</a></li>
                
</ul></div>
	</div>


<div style="height:1600px; width:100%; background-color:#1F2631">
					<div style="height:600px; width:100%"><br />
							<div style="height:600px; width:53%;margin-left:-2%; float:left">
<center><h1 style="color:#FF5534">Calorie Calculator</h1></center>

<form style="color:#FFF; line-height:42px; font-size:22px; margin-left:25%">
Age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="age" type="text" style="height:18px" /><br />
Gender &nbsp;<input name="gen" value="Male" type="radio" id="m" />Male
			<input name="gen" value="Female" type="radio" id="f" />Female<br />
		Height &nbsp;&nbsp;<input style="height:18px" id="feet"  type="text" placeholder="feet"/> <input type="text" id="inch" placeholder="inch" style="height:18px" /><br />
Weight &nbsp;<input style="height:18px" id="weight"  type="text" placeholder="kilograms" /><br />
Activity &nbsp;<select style="height:22px" >
<option id="a">Basal Metabolic Rate</option>
<option id="b">Sedentary - little or no exercise</option>
<option id="c">Lightly Active - exercise/sports 1-3 times/week</option>
<option id="d">Moderately Active - exercise/sports 3-5 times/week</option>
<option id="e">Very Active - hard exercise/sports 6-7 times/week</option>
<option id="f">Extra Active - very hard exercise/sports or physical job</option>
</select><br />
<input type="button" onclick="calc()" value="Calculate" style="color:#FFF; background-color:#FF5534; border:#FF5534;height:30px; width:90px; border-radius:5px; cursor:pointer;font-size:18px;"/>
<br />
<p  style="margin-left:-5%" id="des"></p>

</form>
</div>
<div style="height:650px; width:49%;float:left">
<center><h1 style="color:#FF5534">Calories in Comman Foods</h1></center>
<center>
<table border="2" style="color:#FFF;box-shadow: 1px 1px 10px  #000; font-size:17px">
<tr style="color:#FF5534">
<th>Foods</th>
<th>Size</th>
<th>Calories</th>
</tr>
<tr>
<th>Apple</th>	<th>1 small (4 oz.)</th>	<th>80</th></tr>
<tr><th>Banana</th>	<th>1 medium (6 oz.)</th>	<th>101</th></tr>
<tr><th>Grape</th>	<th>each</th>	<th>2</th></tr>
<tr><th>Mango</th>	<th>1 (8 oz.)</th>	<th>135</th></tr>
<tr><th>Orange</th> <th>1 (4 oz.)</th><th>71</th>
<tr><th>Pear</th>	<th>1 (5 oz.)</th>	<th>100</th></tr>
<tr><th>Peach</th>	<th>1 (6 oz.)</th>	<th>38</th></tr>
<tr><th>Pineapple</th>	<th>1 cup</th>	<th>80</th></tr>
<tr><th>Strawberry</th>	<th>1 cup</th>	<th>53</th></tr>
<tr><th>Watermelon</th>	<th>1 cup</th>	<th>45</th></tr>
<tr><th>Asparagus</th>	<th>1 cup, boiled</th><th>36</th></tr>
<tr><th>Bean curd</th>	<th>4 oz.</th>	<th>81</th></tr>
<tr><th>Broccoli</th>	<th>1 cup</th>	<th>40</th></tr>
<tr><th>Carrots</th>	<th>1 cup</th>	<th>45</th></tr>
<tr><th>Cucumber</th>	<th>each</th>	<th>30</th></tr>
<tr><th>Eggplant</th>	<th>1 cup, boiled</th><th>38</th></tr>
<tr><th>Lettuce</th>	<th>1 cup</th>	<th>7</th></tr>
<tr><th>Tomato</th>	<th>1 cup</th>	<th>29</th></tr>
</table></center>
</div>

</div>
<div style="height:1000px; width:100%">
<center><h1 style="color:#FF5534">All Services</h1></center>
<div id="i1">
	<div style="height:800px; width:30%; float:left">
<img id="left" src="Images/membership_icon.png" />
<img id="left" src="Images/group_fitness_icon.png" />
<img id="left" src="Images/nutrition_council_icon.png" />
<img id="left" src="Images/yoga_icon.png" />
	</div>
<div style="height:800px; width:65%;float:left; color:#FFF">
<h3>MEMBERSHIP</h3>
THE GYM is no ordinary experience. It is a lifestyle program designed to achieve every individual members respective health and fitness goals. Whether you are a beginner or an enthusiast, every program, product and experience we offer begins and ends with creating a premiere and comfortable atmosphere tailored for your individual and overall success and safety.<br /><br />
<h3>GROUP FITNESS CLASSES</h3>
Cardio. Crunches. Camaraderie. Experience our wide variety of innovative classes designed to fit every schedule and need, we offer everything from strength, sculpting and conditioning to martial arts, dance and a number of styles unique to THE GYM. Our class schedules are designed to include both the latest fitness trends and methods for getting results in a fun, energizing atmosphere. <br /><br />
<h3>NUTRITION COUNSELING</h3>
An apple a day. Our Nutrition experts collaborate with you in your overall fitness and health by working to build a customized nutritional program around your own personal goals. We will help you to reach nutritional success for a healthier, happier you.<br /><br />
<br /><br /><br />

<h3>YOGA CLASSES</h3>
Get cut from the same cloth. Explore your own inspiration through Yoga. Let our team of dedicated instructors guide you to newfound discovery in strength, flexibility and overall well-being. All mats, blocks and towels are provided, and equipment is cleaned daily.<br />
</div>

</div>
<div id="i2">
<div style="height:800px; width:30%; float:left">
<img id="right" src="Images/weight_management_icon.png" />
<img id="right"src="Images/spinning_class_icon.png" />
<img id="right" src="Images/Physical_Therapy_Tile.png" />
<img id="right" src="Images/juicebar_icon.png" />
</div>
<div style="height:800px; width:65%;float:left; color:#FFF">
<h3>WEIGHT MANAGEMENT</h3>
Build the body you want. Our weight management system will provide you with a custom-designed fitness and nutrition program based on the results of your individual metabolic profile. Generate noticeable results. Our weight management team will assess your current fitness level and nutritional habits and will help you achieve weight loss and sustain your lifestyle transformation.<br /><br />
<h3>SPINNING CLASSES</h3>
Swap your laundry cycle for a Spin cycle. Our spin studios are equipped with Stadium seating* and the latest in STAR TRAC technology, ensuring a challenging and invigorating ride from beginning to end.<br />
<br /><br /><br /><br />
<h3>PHYSICAL THERAPY</h3>
Examine, Evaluate, Diagnose, Treat.<br />
<br />
<br />
<br />
<br />
<br /><br />
<br />
<h3>JUICEBAR</h3>
Fuel your workout. Refresh and re-connect with good friends at our Juice Bar where you can enjoy protein shakes and fruit smoothies geared to provide nourishment and renewed energy pre or post workout.
</div>
</div>
</div>
</div>
</div>
<hr />


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