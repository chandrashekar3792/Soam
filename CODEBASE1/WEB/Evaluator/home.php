<?php

	include_once "../checkUserSession.php";
	if(!$userIsLoggedIn)
	{
		//Redirect to login page..
		echo "User is not logged in...";
		header('Location: ../index.php');
		exit;
	}
	else if($_SESSION["LoggedUserType"] == "E")
	{
		//header('Location: ../Evaluator/home.php');
		//exit;
		//continue showing this page..
	}
	else if($_SESSION["LoggedUserType"] == "R")
	{
		header('Location: ../RecordKeeper/frontend.php');
		exit;
		//continue showing this page.
	}
	else if($_SESSION["LoggedUserType"] == "A")
	{
		('Location: ./AdminHomePage.php');
		exit;
		//continue showing this page...
	}
	
$Title = "Evaluators";
include_once "../common/header.php";
?>
<html>
<head>
 <title>home</title>
 </head>
 
   <h1>LIST OF FORM TEMPLATES</h1>
   
<form action="form.php" method = "POST">
<?php
$host        =    'localhost';
$user        =    'root';
$password    =    '';

$database    =    'FORM_MANAGEMENT';
$conn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("FORM_MANAGEMENT",$conn)  or die("Could connect to Database");

//$result=mysql_query("select count(form_title) from form_list");

$result = mysql_query("select form_title  from form_list");
$rowcount=mysql_num_rows($result);
//echo $rowcount;
for($i=0;$i<$rowcount;$i++)
{
$row = mysql_fetch_array($result, MYSQL_BOTH);
//$value=$row[$i];
//print $value;
?>
<input type = "radio"
                 name = "formtitles"
				  value=<?php print $row[0];?> />
                 <span> <?php print $row[0]; ?></span><br>

<?php

}
?>
<input type="submit" value="Submit"/>
</form>
<?php
include_once "../common/footer.php";
?>
   
   
   
   
   
   
   
   
   
   
   
   
   
   