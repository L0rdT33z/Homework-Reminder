<?php

	mysql_connect("localhost","usernamedb","passworddb");
	mysql_select_db("usernamedb");
	mysql_query("SET NAMES UTF8");
	
	
 $hostname = "localhost";
 $user = "usernamedb";
 $password = "passworddb"; 
 $dbname = "usernamedb"; 

@session_start();

 if (isset($_SESSION['login_true'])) 
{
	date_default_timezone_set('Asia/Bangkok');
$today_time=date("Y-m-d H:i:s");
$query = "UPDATE member SET LastUpdate = '".$today_time."' WHERE User = '".$_SESSION['login_true']."'";
$result = mysql_query($query);
}
?>