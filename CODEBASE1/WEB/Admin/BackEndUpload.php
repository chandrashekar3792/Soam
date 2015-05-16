<?php
function uploadImageFile($target_dir)
{
	//$target_dir = "../".$imgLoc."images/";
	$target_file = $target_dir . basename($_FILES["fileInput"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	echo $imageFileType." is the image file type";
	echo "POST req is : ";
	print_r($_POST);
	
	echo "Files array is: ";
	print_r($_FILES);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) 
	{
		$check = getimagesize($_FILES["fileInput"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileInput"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
		echo "Sorry, your file was not uploaded.";
		return false;
	// if everything is ok, try to upload file
	} 
	else 
	{
		if (move_uploaded_file($_FILES["fileInput"]["tmp_name"], $target_file)) 
		{
			echo "The file ". basename( $_FILES["fileInput"]["name"]). " has been uploaded.";
			return true;
		} else 
		{
			echo "Sorry, there was an error uploading your file.";
			return false;
		}
	}
}
if($_POST["hidden"] == "forms")
{
	echo "Uploading new form Image";
	$isFileUploadSuccess = uploadImageFile("../images/forms/");
}
else if($_POST["hidden"] == "signatures")
{
	echo "Uploading new user signature Image";
	$isFileUploadSuccess = uploadImageFile("../images/signatures/");
}
	
if($isFileUploadSuccess)
{
	?>
		<html>
		<body onload="parent.displayRes(true);">
		</body>
		</html>
	<?php
}else
{
	?>
		<html>
		<body onload="parent.displayRes(false);">
		</body>
		</html>
	<?php
}
	
?>