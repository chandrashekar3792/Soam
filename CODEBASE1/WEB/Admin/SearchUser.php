<?php $Title = "UploadDoc"; include_once "../Common/header.php" ?>  
<form class="col-md-12" method="POST" action="SearchByUser.php " onsubmit="sendUserSearchReq(); return false">
<fieldset>

<p>
<label for="username">Search User </label>
<input id="username"type="search" name="search" autofocus/>
</p>
<table>
<tr>
<td><input id="admin"type="radio" name="user" value="admin" checked>Admin </input></td>

<td><input id="eval"type="radio" name="eval" value="evaluator">Evaluator </input></td>
<td><input id="rcd" type="radio" name="rcd" value="Record_keepor">Record_keepor</input> </td>
</tr>
</table>
<p> 
<input type="Submit"  value="Search"></input>
</p>
<div id="divSearchMsg" style="color:red;">

</div>
<p> 
<input type="button" onclick="alert('Deleted')" value="Delete"></input>
</p>


</fieldset>
</form>
<?php include_once "../Common/footer.php"; ?>