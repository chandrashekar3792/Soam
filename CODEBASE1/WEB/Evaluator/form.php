<?php
include_once "/Common/header.php";

include 'dbconnect.php';
$formtitle=extract($_POST);
/*$query=mysql_query(insert into attendance_report values("position","[10px,10px]","[60px,10px]",
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
$result=mysql_query("select * from attendance_report where form_name='position'");?>

<form action="saveaction.php">
<?php
	for($colscount=1;$colscount<mysql_num_fields($result);$colscount++)
	{
	 $colvalue = mysql_result($result,$colsCount);
	($left,$top)=parse($result[colscount]);
?>
 <input type="text" value="text" style="position:absolute; top:<?php echo $top ?>;left:<?php echo $left ?>"></input>
<?php
 }
 $path=mysql_query("select form_img_path from form_list where form_title='$formtitle'");
?> 
<body background="<?php echo $path; ?>"> 
<p> FORM NAME: <input type=text,name=FORMNAME > </p>

<input type=submit, value=save>
</body>

<?php

include_once "/Common/footer.php";
?>





