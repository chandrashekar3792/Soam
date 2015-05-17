<?php
	header("Content-Type: text/plain");

	//extract($_POST);
	extract($_POST);
	include_once "../common/dbconnect.php";
	
	//$sql="SELECT * FROM form_list";
	//$column_values_str = "";
	// foreach($_POST as $key=>$value)
	// {
		// //echo $key." value is ".$value;
		// $column_values_str += $value.",";
	// }
	$formListInsertQueryFailed = 0;
	$createQueryFailed = 0;
	$formDetailsInsertQueFailed = 0;
	
	$signature = $_POST['filePath'];
	$pos1 = strpos($signature,"\\");
	//echo $pos1;
	$signature = substr($signature,$pos1+1);
	$pos1 = strpos($signature,"\\");
	//echo $pos1;
	//echo $signature;
	$signature=substr($signature,$pos1+1);
	//echo $signature;
	$signature= "../images/forms/".$signature;
	$sql="insert into form_list values('$form_title','Form keeps track of All students attendance','$signature') ";
	//echo $sql;
	$result=mysql_query($sql);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($result==1)
	{
		echo "Created New Form in form_list table";
		
		//now creating a new table with those values...
		$createTbSql = "Create table $form_title (form_name varchar(40),
													signed_by int(40)";
		
		$insertSql = "insert into $form_title values(
													'position',
													1 ";
		$i = 1;
		
		foreach($_POST as $key=>$value)
		{
			//echo count($_POST);
			// //eliminate considering first 2 entry in the $_POST count, to eliminate considering first form_title and path entry..
			// if($i < count($_POST))
			// {
				// $createTbSql = $createTbSql.' , ';
				// $insertSql = $insertSql.' , ';
			// }//end of if..
			//don't consider the first 2 entry of $_POST since its form_title..
			if($i > 2)
			{
				//echo $key." value is ".$value;
				$createTbSql =  $createTbSql.','.$key.' varchar(40)';
				$insertSql = $insertSql.',\''.$value.'\'';
			}
			$i += 1;
		}//end of for each loop..
		$createTbSql .= ',primary key(form_name),foreign key(signed_by) references signatures(userid))';
		$insertSql .= ')';
		
			
		echo $createTbSql;
		echo $insertSql;
		
		$createRes = mysql_query($createTbSql);
		
		if($createRes)
		{
			echo "DB Table created successfully...";
			$insertRes = mysql_query($insertSql);
			
			if($insertRes == 1)
			{
				echo "Success";
			}
			else
			{
				echo "Value insert into created table failed";
				$formDetailsInsertQueFailed = 1;
			}
		}//end of if..
		else
		{
			echo "Table Creation Failed";
			$createQueryFailed = 1;
		}
		
		
	}//if table inserting into form_list table is successful..
	else 
	{
		$formListInsertQueryFailed = 1;
		$queryFailed = 0;
	}
	if($formListInsertQueryFailed==1 || $createQueryFailed==1 || $formDetailsInsertQueFailed==1)
	{
		//Remove created query
		if($formDetailsInsertQueFailed)
		{
			echo "Dropping the new table";
			//delete table
			$sql = "drop table $form_title";
			echo $sql;
			mysql_query($sql);
			$createQueryFailed = 1;
		}
		if($createQueryFailed)
		{
			echo "deleting new entry in form_list table";
			$sql = "delete from form_list where form_title = $form_title";
			echo $sql;
			mysql_query($sql);
		}
		echo "Failure";
	}

	include_once "../common/dbDisconnect.php";
	// function uploadImage()
	// {
		// $target_dir = "FormImages/";
		// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		// $uploadOk = 1;
		// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// // Check if image file is a actual image or fake image
		// if(isset($_POST["submit"])) 
		// {
			// $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			// if($check !== false) {
				// echo "File is an image - " . $check["mime"] . ".";
				// $uploadOk = 1;
			// } else {
				// echo "File is not an image.";
				// $uploadOk = 0;
			// }
		// }
	// }//end of function to upload Image..
?>