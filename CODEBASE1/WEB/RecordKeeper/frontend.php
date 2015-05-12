<html>
<body>
<h1>User Records</h1>
<div style = "float:left; width: 50%;">

<?php
$host        =    'localhost';
$user        =    'root';
$password    =    '';

$database    =    'FORM_MANAGEMENT';
$conn=mysql_connect("localhost","root","") or die("could not connect my sql");
mysql_select_db($database,$conn) or die("could connect to Database");

//$result=mysql_query("select count(form_title) from form_list");
//echo $rowcount;

print "<h2>List of Form Names</h2>";

$result = mysql_query("select form_title  from form_list");
$rowcount=mysql_num_rows($result);
$i=0;
while($i<$rowcount)
{
$row = mysql_fetch_array($result, MYSQL_BOTH);
//$value=$row[$i];
//print $value;
?>
<input type = "radio"
                 name = "name" />
                 <span> <?php print  $row[0]; ?></span><br/>

<?php
$i=$i+1;
}
?>
</div>
<div style = "float:right; width: 50%;">
<?php
//$result=mysql_query("select count(name) from USERS");
//echo $rowcount;

$result = mysql_query("select name  from USERS");
$rowcount=mysql_num_rows($result);


print ("<h2> List of User Names</h2>");
$i=0;
//echo $rowcount;
while($i<$rowcount)
{

$row = mysql_fetch_array($result, MYSQL_BOTH);
//print_r($row);
?>
<input type = "radio"
                 name = "name"/>
                 <span> <?php print $row[0]; ?></span><br/>

<?php
$i=$i+1;
}
?>
</div>


</form>
<input type="submit" value="submit" align="right"/>

</body>
</html>

