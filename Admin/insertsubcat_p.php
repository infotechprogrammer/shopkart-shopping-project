<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";
$catid=$_GET['c_id'];
$subcat=$_GET['subcat'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="INSERT INTO sub_category (c_id,s_name) VALUES ('$catid','$subcat')";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
header("Location:sub categories.php");
exit;
}
else{
echo "Record Cant be deleted";
}
mysqli_free_result($result);
mysqli_close($connection);
?>