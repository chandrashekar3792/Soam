<?php
include_once "/Common/header.php";

include 'dbconnect.php';
extract($_POST);
$myarry = parse($formrecord);
$result=mysql_query("select * from $myarry[1] where form_name='position'");
$query=mysql_query("select form_img_path from form_list where form_title='$myarry[1]'");
$count=mysql_num_rows($query);
$pathlist=mysql_fetch_array($query,MYSQL_BOTH);
$result1=mysql_query("select * from $myarry[1] where form_name='$myarry[0]'");
?>
<table border="1.0px">
<thead>
	</thead>
	<tfoot>
	</tfoot>
	<tbody>
		<tr>
			<td>	
<div id="fileDisplayArea">
					<img  src = "<?php echo $pathlist[0];?>" opacity="100" id="UploadedImage" width="728px" height="512px"/>
					<!--div id="HtmlElemDisplayContainer" style="position:absolute; top:165px; left:118px"-->
				</div>
				</td>
				</tr>
				</tbody>

				</table>

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
	$myarray = array($top,$left);
	return $myarray;
	
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
 
?> 

<input type="text" value="<?php echo $path; ?>" > </input>
<input type="button" onClick="window.print()" value="print this page"/>
</body>

<?php

include_once "/Common/footer.php";
?>
