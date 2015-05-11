<?php $Title = "UploadDoc"; include_once "../Common/header.php" ?>  
<form method="post" action=".php">
<fieldset>

<p>
<label for="username">Search User </label>
<input type="search" name="googlesearch" autofocus/>
</p>
<table>
<tr>
<td><input type="radio" name="user" value="admin" checked>Admin </td>

<td><input type="radio" name="user" value="evaluator">Evaluator </td>
<td><input type="radio" name="user" value="Record_keepor">Record_keepor </td>
</tr>
</table>
<p> 
<input type="button" onclick="alert('Search results')" value="Search">
</p>
<div>

</div>
<p> 
<input type="button" onclick="alert('Deleted')" value="Delete">
</p>


</fieldset>
</form>
<?php include_once "../Common/footer.php"; ?>