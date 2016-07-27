<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "IT_requests";
mysql_connect($host,$user,$password);
mysql_select_db($database);

$jsondata = file_get_contents("../data/requests.json");

$data = json_decode($jsondata, true);

$recordid = $data["recordid"];
$userid = $data["userid"];
$create_date = $data["create_date"];
$title = $data["title"];
$customer_name = $data["customer_name"];
$assigned_user = $data["assigned_user"];
$status = $data["status"];
$priority = $data["priority"];
$description = $data["description"];
$type = $data["type"];
$issue_start = $data["issue_start"];
$issue_end = $data["issue_end"];
$issue_type = $data["issue_type"];
$request_due_date = $data["request_due_date"];
$request_implement_date = $data["request_implement_date"];
$completion_date = $data["completion_date"];
$outcome = $data["outcome"];
$outcome_comment = $data["outcome_comment"];


//    
$sql = "INSERT INTO IT_requests (recordid, userid, create_date, title, customer_name, assigned_user, status, priority, description, type, issue_start, issue_end, issue_type, request_due_date, request_implement_date, completion_date, outcome, outcome_comment) VALUES('1975', '00002', '7/27/2016', 'Ajax tutorial', 'Greg', 'John', 'Active', 'Medium', 'customer needs help with ajax functions', 'request', 'null', 'null', 'null', '7/27/2016', '7/28/2016', 'null', 'null', 'null') ";

$result = mysql_query($sql);

if (!$result) {
	die('Invalid query: ' . mysql_error());
}


echo $jsondata;
?>