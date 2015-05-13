<?php $Title = "SECURE ONLINE FORM MANAGEMENT"; include_once "/Common/header.php" ?>

<div class="container">

	<div class="page-header">
		<h1 style=" color:#00FF00;">LOGIN DETAILS</h1>
	</div>

	<!-- Simple Login - START -->
	<form class="col-md-12" method="POST" action="login.php" onsubmit="sendLoginReq(); return false">
	<!--form class="col-md-12" method="POST" action="login.php" -->
	<fieldset>
	
		<div id="divLoginMsg" style="color:red;"></div>
		<div class="form-group"> 
			<input  id="username" name="username" type="text" class="form-control input-lg" placeholder="Username" required/>
		</div>
		
		<div class="form-group">  
			<input id="password"  name="password" type="password" class="form-control input-lg" placeholder="Password" required/>
		</div>
		
		<input id="admin" selected="selected" type="radio" name="autho" value="A" required>Administrator </input>
		<input id="eval" type="radio" name="autho" value="E" required>Evaluator</input>
		<input id="rcd" type="radio" name="autho" value="R" required>RecordKeeper</input>
				
		<div class="form-group">
			<!--button >Sign In</button-->
			<input type="submit" text="Sign In" />
			<br />	
			<!--input type="reset" text = "Reset" />
			<br /-->
			<span><a href="#">Need help?</a></span>
			<!--span class="pull-right"><a href="AddNewUser.php">New Registration</a></span-->
		</div>
		</fieldset>
	</form>

	<!-- Simple Login - END -->

</div>

<!--link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /-->
<!--link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" /-->

<!--script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script-->
<script type="text/javascript" src="js/sendLoginRequest.js"></script>

<?php include_once "/Common/footer.php"; ?>