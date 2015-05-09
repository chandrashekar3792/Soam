<?php $Title = "SECURE ONLINE FORM MANAGEMENT"; include_once "/Common/header.php" ?>

<div class="container">

<div class="page-header">
<h1><font color="#00FF00">SECURE ONLINE FORM MANAGEMENT</font></h1>
</div>

<!-- Simple Login - START -->
<form class="col-md-12"action="login.php" method="POST">
<fieldset>
	<div class="form-group"> 
		<input  id="username" name="username" type="text" class="form-control input-lg" placeholder="Username">
	</div>
	<div class="form-group">  
		<input id="password"  name="password" type="password" class="form-control input-lg" placeholder="Password">
	</div>
			<input id="admn"type="radio" name="autho" value="A">ADMINSTRATOR </input>
			<input id="eval"type="radio" name="autho" value="E">EVALUATOR</input>
			<input id="rcd" type="radio" name="autho" value="R">RECORD KEEPER</input>
			
		
	<div class="form-group">
		<button class="btn btn-primary btn-lg btn-block">Sign In</button>
		<span><a href="#">Need help?</a></span>
		<span class="pull-right"><a href="AddNewUser.php">New Registration</a></span>
	</div>
	</fieldset>
</form>

<!-- Simple Login - END -->

</div>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<?php include_once "/Common/footer.php"; ?>