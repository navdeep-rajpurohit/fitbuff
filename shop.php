<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shop - FIT`BUFF</title>
<link href="commanpro.css" rel="stylesheet" />
</head>
<body style="font-family:Tahoma, Geneva, sans-serif">
<?php
//	session_destroy();
if(!(isset($_SESSION['usr'])))
{
	echo "<script>alert('Please Login First')</script>";
	echo "<script> window.location.replace('home.php')</script>";

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
<a href="cart.php"><input type="submit" id="t4" value="MY CART"/></a>
    </div>
	<div id="mid">
	<img id="logo" src="fitbuff.png" /></div>
		<div id="menu">
	<ul id="list">
	<li id="menuid"><a id="menub" href="home.php"/>Home</a> </li>
    <li id="menuid"><a id="menub" href="gallery.php"/>Gallery</a></li>
    <li id="menuid" style="background-color:#333;
	color:#FF5534;
	transition: all 0.4s ease-in-out;
	border-bottom:solid #FFF;
	padding-bottom:2px"><a id="menub" href="shop.php"/>Shop</a></li>
    <li id="menuid"><a id="menub" href="plans.php"/>Plans</a></li>
    <li id="menuid"><a id="menub" href="services.php"/>Services</a></li>
    <li id="menuid"><a id="menub" href="contact.php"/>Contact</a></li>
                

	</ul></div>
	</div>
    
<div style="height:1500px; width:100%; background-color:#1F2631; color:#FF5534; overflow:auto">
<form action='itemList.php' method='post'>
<table  style="line-height:50px; margin-top:5%; margin-left:5%; font-size:18px; color:#FFF">
		
<?php
   $con = mysql_connect("localhost","root","") or die(mysql_error());

	$sql="use fitnessDB";
	mysql_query($sql) or die(mysql_error());
	
	
	
	$sql = "select * FROM ItemTB";
		
	$rs = mysql_query($sql) or die(mysql_error());
			while ( $row = mysql_fetch_array($rs))
			{
			$name = $row['name'];
			$company= $row['company'];
			$rate= $row['rate'];
			
			$pic=$row['pic'];
			$src="AddToCart.php?name=".$name. "&rate=".$rate. "&pic=".$pic;
			echo "
					<tr>
				  <td style='width:300px'><img style='line-height:90px; margin-top:15%; border-radius:15px; height:150px; width:150px' src=admin/$pic></td>
				  <td style='width:550px'><span style='color:#FF5534'>$company &trade;</span><br />$name</td>

			      <td style='width:130px'>₹ $rate</td>
				  
				  <td style='width:150px'><a  href='".$src."'><input type='button' value='Add to Cart' style='color:#FFF; background-color:#FF5534; border:#FF5534;height:40px; width:120px; border-radius:5px; cursor:pointer;font-size:18px'  /></a>


				  
				  
				  </td>
			</tr>";
		}
		echo "</table></form>";
   ?>      </table>
</form>
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