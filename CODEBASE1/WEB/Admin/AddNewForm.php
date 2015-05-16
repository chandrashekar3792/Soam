<?php 
$Title = "Add New Form";
include_once "../common/header.php";
?>

<script type="text/javascript" src="../js/AddNewForm.js"></script>
<table border="1.0px">
	<thead>
	</thead>
	<tfoot>
	</tfoot>
	<tbody>
		<tr>
			<td>
				<!--img width="640px" height="480px" src="../images/admin module image.JPG" /-->
				<!--img width="640px" height="480px" src="../images/attendance_report.jpg" /-->
				<div id="fileDisplayArea">
					<img opacity="100" id="UploadedImage" width="800px" height="512px"/>
					<!--div id="HtmlElemDisplayContainer" style="position:absolute; top:165px; left:118px"-->
				</div>
			</td>
			<td border="1.0px" align="left" valign="top">
				<!--Display toolbox here-->
				<form style="margin:0px; padding:0px" id="toolBox" method="" action="" onsubmit="addNewTextBox(); return false">
					<br /><span style="color:White"> Position X: <input style="width:75px; height:30px" type="text" id="PosX" placeholder="X-Position" required> px</input></span><br />
					<br /><span style="color:White"> Position Y: <input style="width:75px; height:30px" type="text" id="PosY" placeholder="Y-Position" required> px</input></span><br />
					<br /><span style="color:White"> Text Box Name: <input style="width:100px; height:30px" type="text" id="tName" placeholder="Text box Name" required></input></span><br />
					
					<br /><input type="submit" value="Add New Text Box"></input>
					<!--br /><br /><input type="button" value="Delete Selected Text Box" onclick="deleteSelectedTBox()"></input-->
				</form>
			</td>
		</tr>
		<tr>
			<td align="center" valign="middle">
				<?php $isSignature=false; include_once "./FrontEndUpload.php"; ?>
				<br /><div id="divFormSaveMsg"></div>
			</td>
			<td>
				<form style="margin:0px; padding:0px" method="POST" action="SaveFormBackend.php" onsubmit="SaveNewForm(); return false">
					<span style="color:White"> Form Title<input style="width:100px; height:30px" type="text" name="form_title" id="form_title" placeholder="File Title" required/>
					<br /><br /><input type="submit" id="SaveFormBtn" value="Save Form" style="width:100px; height:30px"></input>
				</form>
			</td>
		</tr>
		<!--tr>
			<td>Row 3 col 1
			</td>
			<td>Row 3 col 2
			</td>
		</tr-->
	</tbody>
	
</table>

<?php
include_once "../common/footer.php";
?>
