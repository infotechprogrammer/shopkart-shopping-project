<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
 <?php

$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";

$e=$_POST['email'];
$p=$_POST['pass'];
$t=$_POST['type'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query= "SELECT * FROM user where email='$e' and password='$p' and type='$t'";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if(mysqli_num_rows($result)>0)
{
$_SESSION['user']=$e;
header("Location:index.php");
exit;
}else{
echo "Invalid Email or Password";
}
mysqli_free_result($result);
mysqli_close($connection);
?>
</body>
</html>