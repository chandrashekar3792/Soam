<?php
	header("Content-Type: text/plain");
	extract($_GET);
	function uploadImage()
	{
		$target_dir = "FormImages/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) 
		{
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
	}//end of function to upload Image..

	include_once "./common/dbconnect.php";
	$tbl_name="USERS"; 
	$sql="SELECT name FROM $tbl_name WHERE name='$login_name' and password='$login_password' and usertype='$autho'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{

	// Register $myusername, $mypassword and redirect to file "login_success.php"
	//session_register("username");
	//session_register("password"); 
		if($autho == "A")
		{
			//echo "Admin login successfull";
			echo "./Admin/AdminHomePage.php";
			//header('Location: ./Admin/AdminHomePage.php');
		}
		else if($autho == "R")
		{
			echo "Record-Keeper login successful";
		}
		else if($autho == "E")
		{
			echo "Evaluator login successful";
		}	
	}
	else 
	{
		echo "Failure";
	}

?>