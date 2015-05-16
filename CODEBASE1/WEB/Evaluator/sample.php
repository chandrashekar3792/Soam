<html>
<head><title>User Form</title></head>

<body>
<form>
	<?php
		
			
			
			?>
			
				<!--<p> Degree: <input type="text" value="text" style="position:absolute; top:<?php //echo $top ?>;left:<?php //echo $left ?>"></input> </p>
			
		-->
		<?php
function parse($str)
{
// $pos1=strpos("[",$str);
// echo $pos1;
//echo $str;
$pos1 = strpos($str,"[");
$pos2 = strpos($str,",");
$pos3 = strpos($str,"]");

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos1 === false || $pos2 === false || $pos3 === false  ) {
   // echo "The string [ was not found in the string '$str'";
} else {
    // echo "The string [ was found in the string '$str'";
    // echo " and exists at position $pos";
	
	$top=substr($str,$pos1+1,$pos2-1-$pos1);
	echo $top;
	$left=substr($str,$pos2+1,$pos3-1-$pos2);
	echo $left;
	
}
}
$host        =    'localhst';
$user        =    'root';
$password    =    '';

$database    =    'FORM_MANAGEMENT';
$conn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db($database,$conn)  or die("Could connect to Database");
$result=mysql_query("select * from attendance_report where form_name='positio'");

$colscount=mysql_num_fields($result);
//echo $colscount;
$i=1;
$row = mysql_fetch_array($result, MYSQL_BOTH);
//echo $row[0]."is the entry at index 0";
while($i<$colscount)
{
	parse($row[$i]);
	$i=$i+1;
}
	 



//$result=mysql_query("select count(form_title) from form_list");
//$rowcount=mysql_num_rows($result);
//echo $rowcount;

//$result = mysql_query("select form_title  from form_list");
//$i=0;
//while($i<$rowcount)
//{
//$row = mysql_fetch_array($result, MYSQL_BOTH);
//$value=$row[$i];
//print $value;
?>
<!--<input type = "radio"
                 name = "form_titles"
                 
                 checked = "checked" />
                 <span> <?php //echo $row[$i]; ?></span>-->

<?php
//$i=$i+1;
//}


?>

</form>
<input type="button" onClick="window.print()" value="print this page"/>

</body>
</html>