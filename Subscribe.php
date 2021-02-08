<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['sbsubs']))
{
$email = $_POST['email'];


$con = mysql_connect("localhost","root","") or die(mysql_error());
$sql = "create database if not exists fitnessDB";
mysql_query($sql) or die(mysql_error());

$sql="use fitnessDB";
mysql_query($sql)or die(mysql_error());

$sql="create table if not exists subscribe(email varchar(40))";
mysql_query($sql) or die(mysql_error());


$sql="Insert into subscribe(email) 
	values ('$email')";
mysql_query($sql) or die (mysql_error());

$sql="create table if not exists subscribe(email varchar(255))";
mysql_query($sql) or die(mysql_error());
echo "<script>alert('Subscribed Succesfully')</script>"; 

mysql_close($con);
}
?>

</body>
</html>