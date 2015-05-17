<?php 


	include_once "../checkUserSession.php";
	if(!$userIsLoggedIn)
	{
		//Redirect to login page..
		header('Location: ../index.php');
		exit;
	}
else if($_SESSION["LoggedUserType"] == "E")
{
	header('Location: ../Evaluator/home.php');
	exit;
}
else if($_SESSION["LoggedUserType"] == "R")
{
	header('Location: ../RecordKeeper/frontend.php');
	exit;
}
else if($_SESSION["LoggedUserType"] == "A")
{
	//header('Location: ./AdminHomePage.php');
	//exit;
	//continue showing this page...
}

	$Title = "Delete Form"; 
	include_once "../Common/header.php" 
?>
<form class="dform" method="post" action="DeleteForm.php">
<p>Delete Form Templete</p>
Search User Form <input type="text" name="SearchUser" id="Username" size=”30” maxlength=”25” required placeholder="c@!dgj1123"/>
<input type="submit" value="Submit">
<div>

</div>

<input type="Button" value="Delete">
</form>
<?php include_once "../Common/footer.php"; ?>

