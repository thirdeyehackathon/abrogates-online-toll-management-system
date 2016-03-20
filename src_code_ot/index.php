<!doctype html>
<html>
<?php
mysql_connect("localhost","root","")||die("error");
mysql_select_db("onlinetoll")||die("error"); 
ob_start();
session_start();
$f1=0;
$f2=0;
if($_SERVER['REQUEST_METHOD']=="POST")
{
	@$username=$_POST['usr'];
	@$password=$_POST['pw'];
	@$firstname=$_POST['first'];
	@$user=$_POST['user'];
	@$address=$_POST['add'];
	@$phone=$_POST['mob'];
	@$email=$_POST['ema'];
	@$pass=$_POST['pass'];
	@$pfrom=$_POST['from'];
	@$pto=$_POST['to'];
	@$tollname=$_POST['tollname'];
	@$vehname=$_POST['vehname'];
	@$vehno=$_POST['vehno'];
	if($username!=NULL)
	{	
		$quer1="select firstname from user where username='".$username."' and password='".$password."';";
		$exe=mysql_query($quer1);
		if($exe)
		{
		$val=mysql_fetch_assoc($exe);
		$_SESSION['username']=$val['firstname'];
		}
	}
	else
	{
		$quer="insert into user (firstname,username,address,mobile,email,password) values('".$firstname."','".$user."','".$address."','".$phone."','".$email."','".$pass."')";
		mysql_query($quer);
	}
	if(isset($pfrom)&&!empty($pfrom))
	{	if($vehname=="car")
		{
			$value="70";
		$que1="insert into paytoll (firstname,amount,pfrom,pto,tollname,vehno,vehname) values('".$_SESSION['username']."','".$value."','".$pfrom."','".$pto."','".$vehno."','".$vehname."');"||die("error");
		mysql_query($que1);
		$f2=1;
		}
		if($vehname=="lorry")
		{
			$value="150";
		$que1="insert into paytoll (firstname,amount,pfrom,pto,tollname,vehno,vehname) values('".$_SESSION['username']."','".$value."','".$pfrom."','".$pto."','".$vehno."','".$vehname."');"||die("error");
		mysql_query($que1);
		$f2=1;
		}
		if($vehname=="bus")
		{
			$value="190";
		$que1="insert into paytoll (firstname,amount,pfrom,pto,tollname,vehno,vehname) values('".$_SESSION['username']."','".$value."','".$pfrom."','".$pto."','".$vehno."','".$vehname."');"||die("error");
		mysql_query($que1);	
		$f2=1;

		}
	}
}
if(isset($_SESSION['log']))
{
	$f1=0;
	session_destroy();
}
?>
<head>
<meta charset="utf-8">
<title>Toll Payment</title>
<link rel="stylesheet" href="toll1.css">
<script src="tolljs.js"></script>
</head>
<body class="main" onLoad="tollcon()">
<div class="head">
<a class="lis" href="index.php">Home</a>
<a class="lis" href="about.php">About</a>
<span style="color:#FFFFFF; font-size:20px; margin-left:5px;">
<?php
if(isset($_SESSION['username']) && !empty($_SESSION['username']))
{
	echo $_SESSION['username'];
	$f1=1;		
}
?></span>
<b class="headtext">Online Toll Payment System</b>
<?php 
if($f1!=1){
echo '<a class="sign" href="#" onClick="con1()">Sign In/Sign Up</a>';
}
else
{
	echo '<a class="sign" href="logout.php">Logout</a>';
}
?>
</div>
<form name="det" method="POST" id="si" class="sin" action="index.php">

</form>
<div>
<?php
?>
</div>
</body>
</html>