<?php
$mysql_host="localhost:3306"; // Host name 
$mysql_username="root"; // Mysql username 
$mysql_password=""; // Mysql password 
$db_name="FORM_MANAGEMENT"; // Database name 

$db_conn = mysql_connect("$mysql_host", "$mysql_username", "$mysql_password")or die("cannot connect"); 
$selected_db = mysql_select_db("$db_name")or die("cannot select DB");


?>