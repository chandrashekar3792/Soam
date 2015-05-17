<?php
$host        =    'localhost';
$user        =    'root';
$password    =    '';

$database    =    'FORM_MANAGEMENT';
$conn=mysql_connect("localhost","root","") or die("could not connect my sql");
mysql_select_db($database,$conn) or die("could connect to Database");

//include 'dbconnect.php';
extract($_POST);
//print_r ($_POST);
$formtitle=$_POST['formtitle'];
//echo $formtitle;
$formname=$_POST['FORMNAME'];
//echo $formname;
$sql=mysql_query("select id from users where name='eval'");
$count=mysql_num_rows($sql);
//echo $count;
$i=0;
while($i<$count)
{
$row=mysql_fetch_array($sql,MYSQL_BOTH);
echo  $row[0];
$userid=$row[0];
$i=$i+1;
}



$sql="insert into $formtitle values('$formname','$userid')";
$i=1;
foreach ($_POST as $key=>$value)
{
if($i!=1 && $i!=2)
{
$sql=$sql.','.$value;
}
}
$sql=$sql.')';
//echo $sql;

?>