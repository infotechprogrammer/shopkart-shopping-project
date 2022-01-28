<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";
$cat=$_GET['cat'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="INSERT INTO category (c_name) VALUES ('$cat')";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
header("Location:categories.php");
exit;
}
else{
echo "Record Cant be deleted";
}
mysqli_free_result($result);
mysqli_close($connection);
?>