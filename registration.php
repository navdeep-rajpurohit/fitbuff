<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FIT`BUFF REGISTRATION</title>
<link href="commanpro.css" rel="stylesheet" />
<style>
#box
{
	
	height:20px;
	font-size:16px;
	box-shadow: 0px 0px 2px  #1F2631 inset
	
}
</style>
</head>


<body style="font-family:Tahoma, Geneva, sans-serif">
<?php
if(isset($_POST['sbsign']))
{
$name = $_POST['name'];
$usr = $_POST['usr'];
$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];	
$dd = $_POST['cbdd'];
$mm = $_POST['cbmm'];
$yy = $_POST['cbyy'];
$dob = $_POST['cbyy']."-". $_POST['cbmm']."-".$_POST['cbdd'];
$gen = $_POST['gender'];
$plantype = $_POST['plantype'];


$con = mysql_connect("localhost","root","") or die(mysql_error());
$sql = "create database if not exists fitnessDB";
mysql_query($sql) or die(mysql_error());

$sql="use fitnessDB";
mysql_query($sql)or die(mysql_error());

$sql="create table if not exists usertb(name varchar(10),usr varchar(10),pass varchar(10),dob date,gender varchar(50),plantype varchar(10),Primary key(usr))";
mysql_query($sql) or die(mysql_error());


$sql="Insert into usertb(name,usr,pass,dob,gender,plantype) 
	values ('$name','$usr','$pass','$dob','$gen','$plantype')";
mysql_query($sql) or die (mysql_error());


$usrTb=str_replace(" ","_",$usr);

$sql="create table if not exists ". $usrTb."cart_tb(pic varchar(255),item_name varchar(255),dt date,status varchar(10),rate int)";
mysql_query($sql) or die(mysql_error());
$sql="create table if not exists ". $usrTb."ordered_tb(pic varchar(255),item_name varchar(255),dt date,status varchar(10),rate int)";
mysql_query($sql) or die(mysql_error());


mysql_close($con);
unset($_POST['sbsign']);
}
?>
<div id="head">
	<div id="top">
	<button id="t1">&#x2726; I-D , J.N.V,Bikaner</button> 
	<button id="t2">&#9993; fitbuff@gmail.com</button>
    <button id="t3">&#9990; +91-9251111128</button>
    
      <div class="dropdown" style="float:right">
  <a href="logout.php" ><input type="submit" id="t4" value="HOMEPAGE" name="sblogout" /></a>
  	</div>

    </div>
<div id="mid">
	<img id="logo" src="fitbuff.png" /></div>
		<div id="menu">
	<ul id="list">
    <li style="font-size:29px;
	transform:skew(15deg);
	display:inline-block; 
	height:40px;
	padding: 5px 5px;margin-left:38%;color:#FFF">MEMBERSHIP FORM</li>
               

	</ul></div>
	</div>
       <div style="height:700px; width:100%;background-color:#1F2631; color:#FFF">
       <div style="height:100%; width:47%; float:left">
       <img style="width:140%;max-height:98%;" src="Images/mem.jpg" /></div>
       
       <div style="height:680px; width:30%; margin-left:67%">
       <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style="font-size:22px;line-height:35px;box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.9); text-align:center;height:97%;"><br />

        Name<br />
		<input type="text" id="box" name="name"/> <br />
		Choose your Username<br />
        <input type="text" id="box" name="usr" /><br />
		Create a Password<br />
       	<input type="password" id="box" name="pass" /><br />
        Re-Enter Password<br />
       	<input type="password" id="box" name="pass1" /><br />
 		
 		<tr><td>Birthday</td></tr><br />

<tr><td>
<input type="text" placeholder="Day" size="1" id="box" name="cbdd"/>
<select id="box" style="height:25px" name="cbmm">
<option value='0'>Month</option>
<option value='1'>January</option>
<option value='2'>Feb</option>
<option value='3'>March</option>
<option value='4'>April</option>
<option value='5'>May</option>
<option value='6'>June</option>
<option value='7'>July</option>
<option value='8'>August</option>
<option value='9'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select>
<input type="text" placeholder="Year" size="2px" id="box" name="cbyy"/></td>
</td>
<br />
        Gender<br />
		<input type="radio" name="gender" value="Male"/>Male
        <input type="radio" name="gender" value="Female"/>Female <br />
		Membership Type<br />
        <input type="radio" name="plantype" value="Silver" />Silver<br />
        <input type="radio" name="plantype" value="Gold" />Gold<br />

       	<a href="plans.html" style="color:#FFF;font-size:16px">Know more about Membership Plans</a>
        <br />

<input type="submit" name="sbsign" value="Sign Up" style="color:#FFF; background-color:#FF5534; border:#FF5534;height:40px; width:95px; border-radius:5px; cursor:pointer;font-size:18px; margin-left:50%"  />
		
        </form>
	
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

<form>
<input type="text" style="height:20px; width:220px" /><br /><br /><br />

<input type="button" value="Subscribe" style="color:#FFF; background-color:#FF5534; border:#FF5534;height:40px; width:95px; border-radius:5px; cursor:pointer;font-size:18px"  />
</form>
		</div>
</div>
</body>
</html>