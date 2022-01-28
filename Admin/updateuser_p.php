<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";
$id=$_GET['id'];
$uname=$_GET['uname'];
$email=$_GET['email'];
$pas=$_GET['pas'];
$cono=$_GET['cono'];
$pcode=$_GET['pcode'];
$addr=$_GET['addr'];
$ct=$_GET['ct'];
$st=$_GET['st'];
$typ=$_GET['typ'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="UPDATE user SET username='$uname', email='$email', password='$pas', contactno='$cono', pincode='$pcode', address='$addr', city='$ct', state='$st', type='$typ' WHERE u_id=$id";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
echo "Record Updated";
}
else{
echo "No rows found";
}

header("Location:user.php");
exit;
?>
