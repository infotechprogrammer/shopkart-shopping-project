<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";

$name=$_GET['name'];
$email=$_GET['email'];
$subject=$_GET['subject'];
$company=$_GET['company'];
$message=$_GET['message'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");

$query="INSERT INTO contactus (name, email, subject, company, message) VALUES ('$name','$email','$subject','$company','$message')";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
header("Location:index.php");
exit;
}
else{
echo "Record Cant be deleted";
}
mysqli_free_result($result);
mysqli_close($connection);
?>