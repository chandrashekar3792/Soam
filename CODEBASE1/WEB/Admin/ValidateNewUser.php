<?php 

function NewUser()
{ 
	$name = $_POST['username'];
	$phone = $_POST['telephone'];
	$email = $_POST['email']; 
	$password = $_POST['Password']; 
	$userType = $_POST['autho'];
	
	if(!isset($_POST["username"]) or !isset($_POST["password"]) or !isset($_POST["autho"]) or
		!isset($_POST["email"]) or !isset($_POST["telephone"]) 
		)
	
	include_once "../common/dbconnect.php";
	$query = "INSERT INTO USERS (name,password,usertype,phone,email) VALUES ('$name','$password','$userType','$phone','$email')";
	
	$data = mysql_query ($query);
	if($data)
	{
		//echo "YOUR REGISTRATION IS COMPLETED..."; 
		if($userType == "E")
		{
			//Then insert the user signature here...
			if(isset($_POST['sigPath']))
			{
				$signature = $_POST['sigPath'];
				$pos1 = strpos($signature,"\\");
				//echo $pos1;
				$signature = substr($signature,$pos1+1);
				$pos1 = strpos($signature,"\\");
				//echo $pos1;
				//echo $signature;
				$signature=substr($signature,$pos1+1);
				//echo $signature;
				$signature= "../images/signatures/".$signature;
				//echo $signature;
				$sql = "select id from users where name='$name'";
				$res=mysql_query($sql);
				if($res)
				{
					$resArr = mysql_fetch_array($res,MYSQL_BOTH);
					$sigQuery = "insert into signatures values('$resArr[0]' ,'$signature')";
					echo $sigQuery;
					if($sigQuery)
					{
						mysql_query($sigQuery);
						echo "Success";
					}
					else
					{
						$delQuery = "delete from users where name='$name'";
						mysql_query($delQuery);
						echo "Failure";					
					}
				}
				else
				{
					//user sig not set, hence revert the done query
					$delQuery = "delete from users where name='$name'";
					mysql_query($delQuery);
					echo "Failure";
				}
			}
			else
			{
				//user sig not set, hence revert the done query
				$delQuery = "delete from users where name='$name'";
				mysql_query($delQuery);
				echo "Failure";
			}
			
		}
		else
		{
			echo "Success";
		}
	}
	else
	{
		echo "Failure";
	}
		
	include_once "../common/dbDisconnect.php";
}

 
// function SignUp() 
// { 
	// //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
	// if(!empty($_POST['username'])) 
	// {
		// include_once "../common/dbconnect.php";
		// $query = mysql_query("SELECT * FROM USERS WHERE name = '$_POST[username]' AND password = '$_POST[Password]'") or die(mysql_error());
		// if(!$row = mysql_fetch_array($query) or die(mysql_error()))
		// {
			// NewUser();
			// //echo "Sorry You are a new user";
		// } 
		// else 
		// { 
			// //echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
			// echo "A user with this username is already registered";
		// } 
		// include_once "../common/dbDisconnect.php";
	// } 
// }
// if(isset($_POST['submit'])) 
// { 
	// SignUp(); 
// }  
NewUser();

?>
