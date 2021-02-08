<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

if(isset($_POST['sblogin']))
{
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	
	$sql="use fitnessdb";
	mysql_query($sql) or die(mysql_error());
	
	$usr=$_POST['usr'];
	
	$pass=$_POST['pass'];
	
	
	$sql="Select count(*) from UserTB where usr='$usr' and pass='$pass'";
	$rs=mysql_query($sql) or die(mysql_error());
	$c=0;
	while($row=mysql_fetch_array($rs))
		$c=$row[0];
		
	if($c==0)
		
	echo "<script>alert('invalid username or password....')</script>"; 
	else
	{
	$_SESSION["usr"]=$usr;
	header('Location:midpagesucces.html');
	}
}
			
?>

</body>
</html>