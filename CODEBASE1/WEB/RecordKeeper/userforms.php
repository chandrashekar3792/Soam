<?php
$host        =    'localhost';
$user        =    'root';
$password    =    '';

$database    =    'FORM_MANAGEMENT';
$conn=mysql_connect("localhost","root","") or die("could not connect my sql");
mysql_select_db($database,$conn) or die("could connect to Database");
extract($_POST);
print_r ($_POST);
if (isset($_POST['username']))
 {
$username=$_POST['name'];

$result=mysql_query("select form_title from form_list");
$rowcount=mysql_num_rows($result);

for($i=0;$i<$rowcount;$i++)
{
$formtitarr = mysql_fetch_array($result, MYSQL_BOTH);
$query=mysql_query("select form_name from $formtitarr[0] where signed_by=(select id from users where name='$username'");
//print_r ($row);
$count=mysql_num_rows($query);
for($j=0;$j<$count;$j++)
{
$formnamarr= mysql_fetch_array($result, MYSQL_BOTH);
//print_r($row);
?>
<input type = "radio"
                 name="formrecord"
				 value="<?php print '['.$formnamarr[0].','.$formtitarr[0].']';?>" />
                 <span> <?php print $formnamarr[0]; ?></span><br/>

<?php
$j=$j+1;
}
}
}
 elseif (isset($_POST['formtitle'])) 
 {
  $formtitle=$_POST['name'];
$result=mysql_query("select form_name from $formtitle ");
$rowcount=mysql_num_rows($result);
for($i=1;$i<$rowcount;$i++)
{
$formnamarr=mysql_fetch_array($result,MYSQL_BOTH);
?>
<input type = "radio"
                 name="formrecord"
				 value=" <?php print '['.$formnamarr[0].','.$formtitle.']'; ?>" />
                 <span> <?php print $row[0]; ?></span><br/>
<?php
$i=$i+1;
}
}				 
?>
<form action="backend.php">
<input type="submit" value="submit" />
</form>