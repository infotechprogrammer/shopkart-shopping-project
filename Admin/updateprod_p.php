<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";
//$pid=$_POST['pid']; p_id='$pid'(for changing product id)

$id=$_POST['id'];
$subcatid=$_POST['subcatid'];
$pname=$_POST['pname'];
$pbrand=$_POST['pbrand'];
$pdes=$_POST['pdes'];
$pprice=$_POST['pprice'];
$pstock=$_POST['pstock'];
$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");
?>
<?php
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
		


        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

$query="UPDATE products SET s_id='$subcatid', p_name='$pname', p_brand='$pbrand', p_description='$pdes', p_price='$pprice', p_image='$fileName ',    p_stock='$pstock' WHERE p_id='$id'";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
echo "Record Updated";
header("Location:products.php");
exit;
}
else{
echo "No rows found";
}
		
		}}}
?>
