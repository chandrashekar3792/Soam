<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="FORM_MANAGEMENT"; // Database name 
$tbl_name="USERS"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$name=$_POST["username"];
$password=$_POST["password"];
if ($_POST['autho'] == "A")
    {
        $autho="A";
    }
    else if ($_POST['autho'] == "E")
    {
        $autho="E";
    }
	else if ($_POST['autho'] == "R")
    {
        $autho="R";
    }

$sql="SELECT * FROM $tbl_name WHERE name='$name' and password='$password' and usertype='$autho'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("username");
//session_register("password"); 
echo " login successfull";
//header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}

?>