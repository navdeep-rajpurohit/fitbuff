<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CART</title>
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
<a href="shop.php"><input type="button" id="t4" value="SHOP" /></a>
    </div>
	<div id="mid">
	<img id="logo" src="fitbuff.png" /></div>
		<div id="menu">
	<ul id="list">
	 <li style="font-size:29px;
	transform:skew(15deg);
	display:inline-block; 
	height:40px;
	padding: 5px 5px;margin-left:45%;color:#FFF">MY CART</li>
               

	</ul></div>
	</div>
<div style="	height:1500px; width:100%; background-color:#1F2631; color:#FFF; overflow:auto">
<table  style="margin-top:5%; margin-left:7%; font-size:18px; color:#FFF">
<?php
$item_name=('name');
$rate = ('rate');
$usr=$_SESSION['usr'];
$status="Not Purchased";
$date=date("Y-m-d");
$total=0;
$pic = ('pic');
$src1=0;
$src2=0;


$con=mysql_connect("localhost","root","") or die(mysql_error());
	
	$sql="use fitnessdb";
	mysql_query($sql) or die(mysql_error());
	
	$usrTb=str_replace(" ","_",$usr);
	
	$sql="SELECT * FROM ". $usrTb."cart_tb ";
	$rs = mysql_query($sql) or die(mysql_error());
	while ( $row = mysql_fetch_array($rs))
			{
			$pic = $row['pic'];	
			$item_name = $row['item_name'];
			$rate = $row['rate'];
			$total+=$row ['rate'];
			$src1="payment.php?name=".$item_name. "&rate=".$rate;
			$src="rem_cart.php?name=".$item_name;
			$src2="addtoordered.php?name=".$item_name. "&rate=".$rate. "&pic=".$pic;
			echo "<tr>
				<td style='width:120px'><img style='margin-top:40%; height:150px; width:150px; border-radius:15px' src=admin/$pic> <br /><br /></td>
				 <td style='width:470px'>$item_name</td>
				  <td style='width:150px'>$status</td>
			      <td style='width:150px'>Added &nbsp;on <br/>$date</td>
				  <td style='width:100px'>Rs. $rate</td>
  <td style='width:5px'>	<a  href='".$src."'><div class='tooltip'>&#10006;
  <span class='tooltiptext'>Remove from Cart</span>
</div> </a></td>
				  
				</tr>";
				 }
				
			 echo "</table>";

			 echo "<h4 style='margin-left:80%'>Total Amount <span style='color:#FF5534; font-size:20px'>₹ $total</span></h4> ";
			 echo "<a onclick='location.href='".$src1."'' href='".$src2."'><input type='button' value='Proceed to Payment' style='margin-left:80%; color:#FFF; background-color:#FF5534; border:#FF5534;height:40px; width:200px; border-radius:5px; cursor:pointer;font-size:18px'/></a>";
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