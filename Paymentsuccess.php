<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ORDER SUMMARY</title>
<link href="commanpro.css" rel="stylesheet" />
<style>
.tooltip {
    position: relative;
    display: inline-block;
    
	color:#FF5534;
}

.tooltip .tooltiptext {
    visibility: hidden;
    height:25px;
	width: 150px;
    background-color:#FF5534;
    color:#fff;
    text-align: center;
    border-radius:3px;
   
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 105%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>

</head>

<body style="font-family:Tahoma, Geneva, sans-serif">

<div id="head">
	<div id="top">
	<button id="t1"onclick=" window.open('https://goo.gl/maps/DPar3tbrLHp','_blank') ">&#x2726; I-D , J.N.V,Bikaner</button> 
	<button id="t2" onclick="location.href='mailto:fitbuff@gmail.com';"> &#9993; fitbuff@gmail.com</button>
    <button id="t3">&#9990; +91-9251111128</button>
    
    <div class="dropdown" style="float:right">
  <a href="logout.php" ><input type="submit" id="t4" value="LOGOUT" name="sblogout" /></a>
  	</div>
<a href="ordered.php"><input type="button" id="t4" value="MY ORDER HISTORY" /></a>
    </div>
	<div id="mid">
	<img id="logo" src="fitbuff.png" /></div>
		<div id="menu">
	<ul id="list">
	 <li style="font-size:29px;
	transform:skew(15deg);
	display:inline-block; 
	height:40px;
	padding: 5px 5px;margin-left:40%;color:#FFF">ORDER SUMMARY</li>
               

	</ul></div>
	</div>
<div style="height:500px; text-align:center;  width:100%; background-color:#1F2631; color:#FFF; overflow:auto">

<?php

$rate = ('rate');
$usr=$_SESSION['usr'];
$total=0;
$date=date("Y-m-d");
$date = strtotime($date);
$date = strtotime("+7 day", $date);
$del= date('M d, Y', $date);

$con=mysql_connect("localhost","root","") or die(mysql_error());
	
	$sql="use fitnessdb";
	mysql_query($sql) or die(mysql_error());
	
	$usrTb=str_replace(" ","_",$usr);
	
	$sql="SELECT * FROM ". $usrTb."cart_tb ";
	$rs = mysql_query($sql) or die(mysql_error());
			while ( $row = mysql_fetch_array($rs))
			{
			

			
			$total+=$row['rate'];
			$atotal=$total+70;
			
				 }	
					echo"<h2 style='margin-top:5%; margin-left:%;'> Dear $usr your Order is Successfully Placed.<br /><img src='Images/hourglass.gif' style='height:70px; width:70px' /><br />
We are Processing your Order and we will Deliver it by $del
</h2>";
					echo"<h3 style='margin-top:5%'> Please Keep ₹ $atotal Cash ready while Delivery.</h3>";
					echo"<h3 style='margin-top:5%'>Thanks for Shopping with us.</h3>";
				
		
			 
mysql_close($con);
			

?>
</div>

<hr />

<!--FOOTER-->
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