<?php $Title = "UploadDoc"; include_once "/Common/header.php" ?>
<form method="post" action="UploadDoc.php">
	<div id="page-wrapper">

		<h1>Upload the Scaned Document</h1>
		<div>
			Select an image file: 
			<input type="file" id="fileInput">
		</div>
		<div id="fileDisplayArea"></div>

	</div>

	<script src="../js/images.js"></script>
	<link rel="stylesheet" href="style.css">
</form>
<?php include_once "/Common/footer.php"; ?>
