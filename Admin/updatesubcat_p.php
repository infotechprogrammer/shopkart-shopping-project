<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";
$id=$_GET['id'];

$catid=$_GET['catid'];
$subcatname=$_GET['subcatname'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="UPDATE sub_category SET c_id='$catid',s_name='$subcatname' WHERE s_id='$id'";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
echo "Record Updated";
}
else{
echo "No rows found";
}

header("Location:sub categories.php");
exit;
?>
