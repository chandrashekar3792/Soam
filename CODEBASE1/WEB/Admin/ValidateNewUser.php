<?php 
include_once "../common/dbconnect.php";

function NewUser()
{ 
	$fullname = $_POST['first_name'];
	//$userName = $_POST['user'];
	$email = $_POST['email']; 
	$password = $_POST['Password']; 
	$query = "INSERT INTO USERS (name,password,usertype,phone,email) VALUES ('$fullname','$password','A','9901709195','$email')";
	
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		echo "YOUR REGISTRATION IS COMPLETED..."; 
	} 
}

 
function SignUp() 
{ 
	//checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
	if(!empty($_POST['first_name'])) 
	{
		$query = mysql_query("SELECT * FROM USERS WHERE name = '$_POST[first_name]' AND password = '$_POST[Password]'") or die(mysql_error());
		if(!$row = mysql_fetch_array($query) or die(mysql_error()))
		{
			NewUser();
			//echo "Sorry You are a new user";
		} 
		else 
		{ 
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		} 
	} 
}
// if(isset($_POST['submit'])) 
// { 
	// SignUp(); 
// }  
SignUp();
?>
