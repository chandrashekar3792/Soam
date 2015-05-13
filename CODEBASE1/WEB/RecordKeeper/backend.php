<?php
include_once "/Common/header.php";

include 'dbconnect.php';
extract($_POST);
$result=mysql_query("select * from attendance_report where form_name='positio'");
$result1=mysql_query("select * from attendance_report where form_name=''");
?>

<form action="printaction.php">
<?php
function parse($str)
{

$pos1 = strpos($str,"[");
$pos2 = strpos($str,",");
$pos3 = strpos($str,"]");


if ($pos1 === false || $pos2 === false || $pos3 === false  ) {
   
} else {

	
	$top=substr($str,$pos1+1,$pos2-1-$pos1);
	//echo $top;
	$left=substr($str,$pos2+1,$pos3-1-$pos2);
	//echo $left;
	return $top,$left;
	
}
}
	$colscount=mysql_num_fields($result);
	
$i=1;
$j=1;
$row = mysql_fetch_array($result, MYSQL_BOTH);
$row1 = mysql_fetch_array($result, MYSQL_BOTH);
//echo $row[0]."is the entry at index 0";
while($i<$colscount && $j<$colscount)
{
($top,$left)=parse($row[$i]);
	$i=$i+1;

	
?>
 <input type="text" value="<?php echo $row1[$j] ?>" style="position:absolute; top:<?php echo $top ?>;left:<?php echo $left ?>" disabled ></input>
<?php
 }
 $path=mysql_query("select form_img_path from form_list where form_title='$formtitle'");
?> 
<body background="<?php echo $path; ?>"> 


<input type=submit, value=print>
</body>

<?php

include_once "/Common/footer.php";
?>
