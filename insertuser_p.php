<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";

$username=$_GET['user'];
$email=$_GET['email'];
$password=$_GET['pass'];
$cno=$_GET['cno'];
$pcode=$_GET['pcode'];
$add=$_GET['add'];
$city=$_GET['city'];
$state=$_GET['state'];
$type=$_GET['type'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="INSERT INTO user (username,email,password,contactno,pincode,address,city,state,type) VALUES ('$username','$email','$password','$cno','$pcode','$add','$city','$state','$type')";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
header("Location:login.php");
exit;
}
else{
echo "Record Cant be deleted";
}
mysqli_free_result($result);
mysqli_close($connection);
?>