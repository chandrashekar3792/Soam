<?php $Title = "Welcome Admin"; include_once "../Common/header.php" ?>
<form class="doc" method="post" action="DeleteForm.php">


	<script>
		function bigImg(x) 
		{
			x.style.height = "100px";
			x.style.width = "100px";
			x.style.height = "50px";
			x.style.width = "50px";
		}

		function normalImg(x) 
		{
			x.style.height = "50px";
			 x.style.width = "50px";
			x.style.height = "40px";
			 x.style.width = "40px";
		}
</script>
 
	<!--h1>Available Form Templates</h1-->
	<h1 style = "margin-left:80px"> <font color="#DF0101" > Available Form Templates </font> </h1>
	<div>
	<!--Show Form List Here-->
	</div>

	<!--h2> Manage forms</h2>
	<p><a href="./UploadDoc.php">Add a New Form </a></p>
	<p><a href="">Edit an Existing Form </a></p>
	<p><a href="./DeleteForm.php">Delete an Existing Form</a></p-->
	<table> <tr> <th> <h2> <font color="#AABBAA"> Manage forms </font></h2> </th>  <th> <h2> <font color="#AABBAA"> Manage Users </h2> </font> </th> </tr>



	
	<!--h1>Manage Users</h2>
	<p><a href="./AddNewUser.php">Add a New User Account</a></p>
	<p><a href="./Edituser.php">Edit an Existing User Account</a><br /></p>
	<p><a href="./SearchUser.php">Delete an Existing User Account</a><br /></p-->
	<tr>
	<td><a href="./AddNewForm.php" > <img src = "../images/logo1.png" title = "Click Here Upload A New Document" alt = "Click here to add a new user" style="width:300px; height:100px"  /></a></td>
	<td><a href="./AddNewUser.php" > <img src = "../images/logo1.png" title = "Click Here Add A New User" alt = "Click here to add a new user" style="width:300px; height:100px" /> </a></td>
	</tr>
	<tr>
	<td><a href="" > <img src = "../images/logo1.png" title = "Click Here Yet To Add A Functionality"  alt = "Click here to add a new user" style="width:300px; height:100px" /></a></td>
	<td><a href="./Edituser.php" > <img src = "../images/logo1.png" title = "Click Here Edit An Existing User" alt = "Click here to add a new user" style="width:300px; height:100px" /> </a></td>
	</tr>
	<tr>
	<td><a href="" > <img src = "../images/logo1.png" title = "Click Here Delete A Form" alt = "Click here to add a new user" style="width:300px; height:100px" /> </a></td>
	<td><a href="./SearchUser.php" > <img src = "../images/logo1.png" title = "Click Here Search An User" alt = "Click here to add a new user" style="width:300px; height:100px" /> </a></td>
	</tr>
	</table>
	
	<!-- <p><a href="./UploadDoc.php" id = "logo1">Click here to add a new form </a></p>
	<p><a href="" id = "logo2" >Edit an Existing Form </a></p>
	<p><a href="./DeleteForm.php" id = "logo3" >Delete an Existing Form</a></p>
	
	<h2>Manage Users</h2> -->
	
	<!--<p><a href="./AddNewUser.php" id = "logo4">Add a New User Account</a></p>
	<p><a href="./Edituser.php" id = "logo5" >Edit an Existing User Account</a><br /></p>
	<p><a href="./SearchUser.php" id = "logo6" >Delete an Existing User Account</a><br /></p> -->
	
	
	<div class="logout">
		<!--button >Sign Out</button-->
			<!--a href = "../logout.php" > <img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="border:0px; width:50px; height:50px;" src="../images/signout.png" /> </a-->
			<a href = "../logout.php" > <img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="border:0px; width:40px; height:40px;" src="..//images/logout.png"" /> </a>
	
			<!--<p><a href = "../logout.php"> Sign Out </p></a> -->
		<!-- Destroying the session and signing out the user -->
	</div> 

</form>
<?php include_once "../Common/footer.php"; ?>