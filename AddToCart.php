<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$item_name= $_GET['name'];
$usr=$_SESSION['usr'];
$status="no";
$date=date("Y-m-d");
$rate= $_GET['rate'];
$pic = $_GET['pic'];


$con = mysql_connect("localhost","root","") or die(mysql_error());

$sql="use fitnessDB";
mysql_query($sql)or die(mysql_error());

	$usrTb=str_replace(" ","_",$usr);

$sql="insert into ". $usrTb."cart_tb values('$pic','$item_name','$date','$status','$rate')";
mysql_query($sql) or die(mysql_error());

echo "<script> window.location.replace('shop.php')</script>";
mysql_close($con);



?>
</body>
</html>