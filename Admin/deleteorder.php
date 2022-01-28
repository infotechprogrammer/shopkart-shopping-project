<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";
$id=$_GET['id'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="DELETE FROM orders WHERE o_id=$id";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
		$query1="ALTER TABLE orders AUTO_INCREMENT=$id";
	$result1=mysqli_query($connection,$query1)or die("Error in query:$query");
	if($result1>0)
	{
		
header("Location:orders.php");
exit;
	}
}
else{
echo "Record Cant be deleted";
}
mysqli_free_result($result);
mysqli_close($connection);
?>