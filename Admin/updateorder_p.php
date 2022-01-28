<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";

$id=$_GET['id'];
$un=$_GET['un'];
$pid=$_GET['pid'];
$odate=$_GET['odate'];
$status=$_GET['status'];


$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="UPDATE orders SET status='$status' WHERE o_id=$id";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
echo "Record Updated";
}
else{
echo "No rows found";
}

header("Location:orders.php");
exit;
?>
