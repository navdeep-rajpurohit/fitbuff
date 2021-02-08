<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHECKOUT</title>
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
<script>
function next()
{	
			window.location.replace("midpagepayment.html");
}
</script>
</head>

<body style="font-family:Tahoma, Geneva, sans-serif">
<?php
if(isset($_POST['sbadd']))
{
$usr=$_SESSION['usr'];
$addname = $_POST['addname'];
$address = $_POST['address'];
$postal = $_POST['postal'];
$city = $_POST['city'];	
$state = $_POST['state'];
$mobile = $_POST['mobile'];


$con = mysql_connect("localhost","root","") or die(mysql_error());
$sql = "create database if not exists fitnessDB";
mysql_query($sql) or die(mysql_error());

$sql="use fitnessDB";
mysql_query($sql)or die(mysql_error());

$usrTb=str_replace(" ","_",$usr);
$sql="create table if not exists ". $usrTb."address_tb(addname varchar(255),address varchar(255),postal int,city varchar(255),state varchar(50),mobile varchar(10))";
mysql_query($sql) or die(mysql_error());

$usrTb=str_replace(" ","_",$usr);


$sql="insert into ".$usrTb."address_tb values('$addname','$address',$postal,'$city','$state','$mobile')";
mysql_query($sql) or die (mysql_error());
	header('Location:midpagepayment.html');

	$usrTb=str_replace(" ","_",$usr);

	$sql="truncate ". $usrTb."cart_tb ";
mysql_query($sql) or die(mysql_error());
mysql_close($con);

//unset($_POST['sbsign']);
}
?>


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
	padding: 5px 5px;margin-left:43%;color:#FFF">CHECKOUT</li>
               

	</ul></div>
	</div>
<div style="line-height:5px;  height:550px; width:100%; background-color:#1F2631; color:#FFF; overflow:auto; font-size:16px">

<?php

$rate = ('rate');
$usr=$_SESSION['usr'];
$total=0;
$atotal=0;
$pic = ('pic');

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
				echo"<h2 style='margin-left:74%; margin-top:5%'>Amounts</h2> ";				 
				  echo"<h3 style='margin-left:70%; margin-top:3%'>Product Total <span style='color:#FF5534; font-size:22px'>₹ $total</span></h3> ";
				  echo "<h3 style='margin-left:70%; margin-top:3%'>Shipping&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style='color:#FF5534; font-size:22px'>₹ 70</span></h3> ";
		 echo "<br /><h3 style='margin-left:69%; margin-top:3%; font-size:24px'>Order Total &nbsp;&nbsp; <span style='color:#FF5534; font-size:24px'>₹ $atotal</span></h3> ";
	
mysql_close($con);
?>
<div style="margin-left:10%; margin-top:-14%; font-size:22px; line-height:20px">
<h3 style="margin-left:4%">Shipping Address</h3><br />

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
&nbsp;&nbsp;&nbsp;&nbsp;Name <input type="text" name="addname"/><br /><br />
&nbsp;Address <textarea name="address"></textarea><br /><br />
Postcode <input type="text" name="postal" /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City <input type="text" name="city" /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State <input type="text" name="state" /><br /><br />
&nbsp;&nbsp;&nbsp;Mobile <input type="text" name="mobile" /><br /><br />

<input type="submit" value="Continue" name="sbadd"  style="color:#FFF; background-color:#FF5534; border:#FF5534;height:50px; width:115px; border-radius:5px; margin-left:80%; cursor:pointer;font-size:20px; margin-top:2%">
</form>


</div>

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