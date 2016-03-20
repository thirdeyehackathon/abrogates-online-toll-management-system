<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
session_start();
unset($_SESSION["username"]);
$_SESSION['log']=1;
header("Location: index.php");
exit();
?>
<body>
</body>
</html>