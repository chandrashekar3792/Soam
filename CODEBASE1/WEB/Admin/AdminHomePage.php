<?php $Title = "UploadDoc"; include_once "../Common/header.php" ?>
<form class="doc" method="post" action="DeleteForm.php">
 
	<h1>Available Form Templates</h1>
	<div>
	<!--Show Form List Here-->
	</div>

	<h2> Manage forms</h2>
	<p><a href="./UploadDoc.php">Add a New Form </a></p>
	<p><a href="">Edit an Existing Form </a></p>
	<p><a href="./DeleteForm.php">Delete an Existing Form</a></p>
	
	<h1>Manage Users</h2>
	<p><a href="./AddNewUser.php">Add a New User Account</a></p>
	<p><a href="./Edituser.php">Edit an Existing User Account</a><br /></p>
	<p><a href="./SearchUser.php">Delete an Existing User Account</a><br /></p>

</form>
<?php include_once "../Common/footer.php"; ?>