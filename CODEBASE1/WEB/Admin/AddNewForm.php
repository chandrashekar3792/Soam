<?php 
$Title = "New Form";
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
					<img opacity="100" id="UploadedImage" width="640px" height="480px"/>
					<!--div id="HtmlElemDisplayContainer" style="position:absolute; top:165px; left:118px"-->
				</div>
			</td>
			<td align="left" valign="top">
				<!--Display toolbox here-->
				<form style="margin:0px; padding:0px" id="toolBox" >
					<br /><span> Position X: <input style="width:75px; height:30px" type="text" id="PosX" placeholder="X-Position" ></input></span><br />
					<br /><span> Position Y: <input style="width:75px; height:30px" type="text" id="PosY" placeholder="Y-Position" ></input></span><br />
					<br /><input type="button" value="Add New Text Box" onclick="addNewTextBox()"></input>
					<!--br /><br /><input type="button" value="Delete Selected Text Box" onclick="deleteSelectedTBox()"></input-->
				</form>
			</td>
		</tr>
		<tr>
			<td align="center" valign="middle"><?php include_once "./UploadDoc.php"; ?>
			</td>
			<td>
				<button onclick="SaveNewForm()"> Save Form</button>
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
