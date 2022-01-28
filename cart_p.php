<?php session_start();

$pid=$_GET['pid'];

if(isset($_SESSION['products']))
{
	$_SESSION['products']=$_SESSION['products']."~~".$pid;
	echo $_SESSION['products'];
}else
{
$_SESSION['products']=$pid;	
}

header("Location:cart.php");
exit;
?>