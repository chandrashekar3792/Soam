<!DOCTYPE html>
<!-- This is the HTML 5 document -->
<!-- A common template for all of the Web documents of a given site -->
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $Title ?></title>
		<link type="text/css" rel="stylesheet" href="../css/common.css" />
		
		
		<!--link type="text/css" rel="stylesheet" href="../css/temp.css" /-->
	</head>
	
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
		
	<body>
		<div class="nav">
			<table>
			      <tr>
				      <td><img src ="../images/secure.png" style="width:100px;height:80px" /></td>
					  <td> <h1 style="color:red;">SECURED ONLINE FORM MANAGEMENT</h1></td>
				  </tr>
		    </table>
		
			
			
			<!--a href="../HomePageIntro.php">HOME</a> |
			<a href="../QuestionDisplayPage.php">TESTS</a> |
			<a href="../resources.php">RESOURCES</a> |
			<a href="../QuestionDisplayPage.php">PRACTICE TEST</a> |
			<a href="../guidelines.php">GUIDELINES</a>  |
			<a href="../signInPage.php">SING IN</a>  |
			<a href="../signUpPage.php">SIGN UP</a-->   
		</div>
		
		
		<div class="logout">
		<!--button >Sign Out</button-->
			<!--a href = "../logout.php" > <img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="border:0px; width:50px; height:50px;" src="../images/signout.png" /> </a-->
			<a href = "../logout.php" > <img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="border:0px; width:40px; height:40px;" src="..//images/logout.png"" /> </a>
	
			<!--<p><a href = "../logout.php"> Sign Out </p></a> -->
		<!-- Destroying the session and signing out the user -->
	</div> 