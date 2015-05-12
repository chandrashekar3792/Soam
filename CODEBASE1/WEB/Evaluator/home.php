<html>
<head>
 <title>home.php</title>
 </head>
 <body>
   <h1>LIST OF FORM TEMPLATES</h1>
   
<form action="form.php">
<?php
$host        =    'localhost';
$user        =    'root';
$password    =    '';

$database    =    'FORM_MANAGEMENT';
$conn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("FORM_MANAGEMENT",$conn)  or die("Could connect to Database");

$result=mysql_query("select count(form_title) from form_list");
$rowcount=mysql_num_rows($result);
//echo $rowcount;

//$result = mysql_query("select form_title  from form_list");
for($i=0;$i<$rowcount;$i=++)
{
$row = mysql_fetch_array($result, MYSQL_BOTH);
//$value=$row[$i];
//print $value;
?>
<input type = "radio"
                 name = "form_titles"
                 
                 checked = "checked" />
                 <span> <?php echo $row[$i]; ?></span>

<?php
}
?>
<input type="submit" value="Submit"/>
</form>
</body>
</html>
   
   
   
   
   
   
   
   
   
   
   
   
   
   