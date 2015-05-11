<html>
<head><title>User Form</title></head>

<body>
<form>
	<?php
		
			$top="105px";
			$left="280px";
			?>
			
				<!--<p> Degree: <input type="text" value="text" style="position:absolute; top:<?php //echo $top ?>;left:<?php //echo $left ?>"></input> </p>
			
		-->
		<?php
$host        =    'localhost';
$user        =    'root';
$password    =    '';

$database    =    'FORM_MANAGEMENT';
$conn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db($database,$conn)  or die("Could connect to Database");
$rowcount=mysql_query("select count(form_title) from form_list");

$result = mysql_query("select form_title  from form_list");
$i=0;
while($i<$rowcount)
{
$row = mysql_fetch_array($result, MYSQL_BOTH);
$value=$row[$i];
print $value;
?>
<input type = "radio"
                 name = "form_titles"
                 
                 value = "<?php echo $value; ?>"
                 checked = "checked" />

<?php
$i=$i+1;
}
?>

		</form>
</body>
</html>