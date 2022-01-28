<?php
$host="localhost";
$user="root";
$pass="";
$db="img";
$id=$_GET['id'];

$connection=mysqli_connect($host,$user,$pass,$db)or die("Unabe to connect");
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_GET["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
		


        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
           $query="INSERT INTO products (p_image) VALUES ('$fileName') WHERE p_id='$id'";

$result=mysqli_query($connection,$query)or die("Error in query:$query");
            if($result){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
			
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>

<?php
// Get images from the database
$query="SELECT * FROM image";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_row($result)){
    	 $imageURL = 'uploads/'.$row["6"];
		 ?>
    <img src="<?php echo $imageURL; ?>" height="60px" width="50px">
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>