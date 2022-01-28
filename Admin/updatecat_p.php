<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";

$id=$_GET['id'];
$cname=$_GET['cname'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="UPDATE category SET c_name='$cname' WHERE c_id='$id'";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
header("Location:categories.php");
exit;
}
else{
echo "Error in Updation";
}
?>
