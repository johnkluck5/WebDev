<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "IT_requests";
mysql_connect($host,$user,$password);
mysql_select_db($database);

$jsondata = file_get_contents("../data/users.json");

$data = json_decode($jsondata, true);

$userid = $data["userid"];
$password = $data["password"];
$fullname = $data["fullname"];
$status = $data["status"];


//    
$sql = "INSERT INTO IT_requests (userid, password, fullname, status) VALUES('00004', 'R@d1xB@y', 'John Kluck', 'Active') ";

$result = mysql_query($sql);

if (!$result) {
	die('Invalid query: ' . mysql_error());
}


echo $jsondata;
?>