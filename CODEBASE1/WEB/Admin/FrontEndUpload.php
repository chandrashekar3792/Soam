<form action="./BackEndUpload.php" method="post" enctype="multipart/form-data" target="hiddenFrame">
<fieldset>
	<!--span>Select image to upload:</span-->
	<?php 
		if($isSignature)
		{
			?>
				<input type="hidden" name="hidden" id="hidden" value="signatures"></input>
			<?php
		}else//end of if...
		{
			?>
				<input type="hidden" name="hidden" id="hidden" value="forms"></input>
			<?php
		}//end of else..
	?>
	<input type="file" onchange="loadImageOnBrowser()" name="fileInput" id="fileInput" required></input>
	<input type="submit" id="uploadImageBtn" value="Upload Image" name="submit" ></input>
</fieldset>
</form>
<iframe name="hiddenFrame" style="display: none">
</iframe>
<script src="../js/UploadFiles.js"></script>
<!--?php include_once "../Common/footer.php"; ?-->