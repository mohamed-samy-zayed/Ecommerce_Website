<?php
session_start();
require '../sec.php';
if(isset($_SESSION['id']))
{
	@$id = ($_SESSION['id']);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    	//Get File INFO
    	@$Image = $_FILES['UploadedFile'];
    	@$Image_Name = $_FILES['UploadedFile']['name'];	
    	@$Image_Type = $_FILES['UploadedFile']['type'];
    	@$Image_Size = $_FILES['UploadedFile']['size'];
    	@$Image_Temp = $_FILES['UploadedFile']['tmp_name'];
		
    	echo "Name 		: ".$Image_Name."<br>";
    	echo "Type 		: ".$Image_Type."<br>";
    	echo "Size 		: ".$Image_Size."<br>";
    	echo "Temp Name : ".$Image_Temp."<br>";

    	//Errors Containers
    	$Errors = array();

    	//Check File Extension
    	$Allowed_Extensions = array('jpg','jpeg','png');
    	$File_Extension = explode(".", $Image_Name);
    	$File_Extension = end($File_Extension);

    	$IS_True_Image = 0;
        if(in_array($File_Extension , $Allowed_Extensions))
        {
            $IS_True_Image = 1;
        }
    	echo "Extension : ".$File_Extension;
    	if($IS_True_Image != 1){
    		$Errors[] = "<div> Un Able To Upload, The Uploaded File Isn't An Image . the accessable extensions are ( " . implode(', ', $Allowed_Extensions)." )</div>";
		}
    	//Check Size
    	if($Image_Size > 10000000){
    		$Errors[] = "<div> Un Able To Upload, The Uploaded File Is Too Large </div>";
		}

    	//Check Errors & Upload The File
    	if(empty($Errors)){
			@$folderPath = $_SERVER['DOCUMENT_ROOT'].'\all\project\ecommerce\static\profile\\'.$_SESSION['id'];
			// Check if the folder doesn't already exist
            if (!file_exists($folderPath)) {
			    // Create the folder
			    if (mkdir($folderPath, 0777, true)) {
			        echo ("Folder created successfully.");
			    } else {
			    	die ("Error creating folder.");
			    }
			} else {
			    echo ("Folder already exists.");
			}
			@$Image_Name = $_SERVER['DOCUMENT_ROOT'].'\all\project\ecommerce\static\profile\\'.$_SESSION['id'].'\\'.'avatar.png';
            if(file_exists($Image_Name))
            {
                unlink($Image_Name);
            }
			// upload and moving the image profile avatar 
    		move_uploaded_file($Image_Temp, $_SERVER['DOCUMENT_ROOT'].'\all\project\ecommerce\static\profile\\'.$_SESSION['id'].'\\'.'avatar.png');
            $con = new mysqli("localhost","root","","users");
            if($con->connect_error)
            {
                die("Connection Error");
            }
            $img_url = 'http://localhost/all/project/ecommerce/static/profile/'.$_SESSION['id'].'/avatar.png';
			echo "img_url = ". $img_url;
            $stmt = $con->prepare("UPDATE user SET profile_img_url = ? WHERE id = ? ");
            $stmt->bind_param("ss",$img_url, $id);
            $stmt->execute();
		}
        else{
    		foreach($Errors as $error):
    			echo "<br>";
    			echo $error;
    			echo "<br>";
    		endforeach;
    	}


    }
}
else
{
    header("Location: http://localhost/all/project/ecommerce/loginF?error=Login+First");
}
?>