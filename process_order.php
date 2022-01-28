<?php session_start();
if(!isset($_SESSION['user1']))
{
header("Location:login1.php");
exit;
}
$username=$_SESSION['user1'];
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");
$time=date("d-m-Y");
 $p=$_SESSION['products'];
					$pids=explode("~~",$p);
					foreach ($pids as $pid) {
						$query1="SELECT * FROM products WHERE p_id=$pid";
$result1=mysqli_query($connection,$query1)or die("Error in query:$query1");
while($row1=mysqli_fetch_row($result1)){ 

$name=$row1[2];
$img=$row1[6];	

						
						$query="INSERT INTO orders (username,p_id,p_img,p_name,o_date,status) VALUES ('$username',$pid,'$img','$name','$time','pending')";
						
						$result=mysqli_query($connection,$query)or die("Error in query:$query");
}
					}
					unset($_SESSION['products']);
					header("Location:order.php");
					?>