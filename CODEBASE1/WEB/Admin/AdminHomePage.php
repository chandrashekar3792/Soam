<?php $Title = "Welcome Admin"; include_once "../Common/header.php" ?>
<form class="doc" method="post" action="DeleteForm.php">
	<script>
		function bigImg(x) 
		{
			x.style.height = "100px";
			x.style.width = "100px";
		}

		function normalImg(x) 
		{
			x.style.height = "50px";
			 x.style.width = "50px";
		}
	</script>
 
	<h1>Available Form Templates</h1>
	<div>
	<!--Show Form List Here-->
	</div>

	<h2> Manage forms</h2>
	<p><a href="./AddNewForm.php">Add a New Form </a></p>
	<!--p><a href="">Edit an Existing Form </a></p>
	<p><a href="./DeleteForm.php">Delete an Existing Form</a></p-->
	
	<h1>Manage Users</h2>
	<p><a href="./AddNewUser.php">Add a New User Account</a></p>
	<p><a href="./Edituser.php">Edit an Existing User Account</a><br /></p>
	<p><a href="./SearchUser.php">Delete an Existing User Account</a><br /></p>
	
	
	<div class="logout">
		<!--button >Sign Out</button-->
			<a href = "../logout.php" > <img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="border:0px; width:50px; height:50px;" src="..//images/signout.png" /> </a>
	
			<!--<p><a href = "../logout.php"> Sign Out </p></a> -->
		<!-- Destroying the session and signing out the user -->
	</div> 

</form>
<?php include_once "../Common/footer.php"; ?>