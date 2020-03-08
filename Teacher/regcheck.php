<?php
	if(isset($_REQUEST['submit'])){
session_start();
		$uname =  $_POST['uname'];
		$password =  $_POST['password'];
		$uid = $_POST['uid'].'|';
		$gender =  $_POST['gender'];
		$education =  $_POST['education'];
$length=strlen($uname);
$a=0;

if(isset($_POST['uname']))
{
	$uname=$_POST['uname'];
	$length=strlen($uname);
	if($length>=2 && is_numeric($uname)==false)
{
	$uname=$_POST['uname'].'|';
	$a=$a+1;
}
else{echo("name cannot start with number<br/>");}
	
	
}else
{
	echo("fill name");
}





if(isset($_POST['password']))
{
	$password=$_POST['password'].'|';
	$plength=strlen($password);
	if($plength>5)
{
	$a=$a+1;
}
else{echo("passwordmin 6");}
	
	
}else
{
	echo("fill pass");
}







if(isset($_POST['gender']))
{
	$a=$a+1;
}else
{
	echo("select  gender");
}


if($a>2)
{
$file=fopen('user.txt','a');
fwrite($file,$uname);
fwrite($file,$password);
fwrite($file,$uid);
fwrite($file,$gender);
fwrite($file,$education);

fclose($file);	
		
		header("location: login.php");
		}
	}
?>