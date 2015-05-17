<?php

$Title = "New Form";
include_once "../common/header.php";



//include_once "/Common/header.php";

$host        =    'localhost';
$user        =    'root';
$password    =    '';

$database    =    'FORM_MANAGEMENT';
$conn=mysql_connect("localhost","root","") or die("could not connect my sql");
mysql_select_db($database,$conn) or die("could connect to Database");

//include 'dbconnect.php';
//extract($_POST);
foreach ($_POST as $key=>$value)
{
//print  $key."value is".$value;
$formtitle=$value;
}
?>

<?php
//$formtitle=extract($_POST);
/*$query=mysql_query(insert into attendance_report values("positio","2","[10px,10px]","[60px,10px]",
"[10px,40px]","[60px,40px]",
"[10px,70px]","[60px,70px]",
"[10px,100px]","[60px,100px]",
"[10px,140px]","[60x,140px]",
"[10px,170px]","[60px,170px]",
"[10px,200px]","[60px,200px]",
"[10px,230px]", "[60px,230px]",
"[10px,260px]", "[60px,260px]",
"[10px,290px]", "[60px,290px]",
"[10px,310px]", "[60px,310px]",
"[10px,340px]", "[60px,340px]",
"[10px,370px]", "[60px,370px]",
"[10px,400px]", "[60px,400px]",
"[10px,430px]", "[60px,430px]",
"[10px,460px]", "[60px,460px]",
"[10px,490px]", "[60px,490px]",
"[10px,520px]", "[60px,520px]",
"[10px,550px]", "[60px,550px]", 
"[10px,580px]", "[60px,580px]",
"[10px,610px]", "[60px,610px]",
"[10px,630px]", "[60px,630px]",
"[10px,650px]","[60px,680px]",
"[10px,680px]","[60px,680px]",
"[10px,710px]", "[60px,710px]",
"[10px,740px]", "[60px,740px]",
"[10px,770px]", "[60px,770px]",
"[10px,800px]", "[60px,800px]",
"[10px,830px]");*/
$result=mysql_query("select * from $formtitle where form_name='position'");
 $query=mysql_query("select form_img_path from form_list where form_title='$formtitle'");
 $count=mysql_num_rows($query);
  $pathlist=mysql_fetch_array($query,MYSQL_BOTH);
  //for($i=0;$i<$count;$i++)
  //{
 // print $pathlist[0];
  //}
  
 //$path=mysql_query($query);
 //$row=mysql_fetch_field($path);
 //echo $row;
 //$row = mysql_fetch_assoc($query);
 //echo $row;
   // $filePath = $row['form_img_path'];
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
					<img  src = "<?php echo $pathlist[0];?>" opacity="100" id="UploadedImage" width="800px" height="512px"/>
					<!--div id="HtmlElemDisplayContainer" style="position:absolute; top:165px; left:118px"-->
				</div>
				</td>
				</tr>
				</tbody>

				</table>

<!--form action="saveaction.php" method="POST"-->
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
//echo $colscount;
$i=2;
$row = mysql_fetch_array($result, MYSQL_BOTH);
//echo $row[0]."is the entry at index 0";
while($i<$colscount)
{
$myarray=parse($row[$i]);
	$i=$i+1;


	
?>
 <input type="text"  style="width:100px; height:25px; position:absolute; top:<?php echo $myarray[1].'px' ?>;left:<?php echo $myarray[0].'px' ?>"></input>
<?php
 }
?> 

<form action="saveaction.php" method="POST">
<p> FORM NAME: <input type="text" name="FORMNAME" /> </p>

<input type="text" value="<?php echo $formtitle; ?>" name="formtitle" ></input>
<input type="submit" value="save" />
</form>


<?php

include_once "../common/footer.php";
?>





