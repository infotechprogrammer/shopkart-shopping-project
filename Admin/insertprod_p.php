<?php
$host="localhost";
$user="root";
$pass="";
$db="shopkartadmin";

$subcatid=$_POST['s_id'];
$pname=$_POST['pname'];
$pbrand=$_POST['pbrand'];
$pdesc=$_POST['pdesc'];
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
            // Insert image file name into database
        /*   $query="INSERT into products VALUES ('$fileName')";

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
echo $statusMsg; */
$query="INSERT INTO products (s_id, p_name, p_brand, p_description, p_price, p_image, p_stock) VALUES ('$subcatid','$pname','$pbrand','$pdesc','$pprice','$fileName','$pstock')";

$result=mysqli_query($connection,$query)or die("Error in query:$query");

if($result>0)
{
	echo"Inserted";
	header("Location:products.php");
	exit;
}
else{
echo "Record Cant be Inserted";
}
}}}
?>

