<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "IT_Requests";

$conn = new mysqli("localhost", "root", "", "IT_Requests");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$jsondata = file_get_contents("../data/requests.json");
$data = json_decode($jsondata, true);


$user = $_GET["userid"];
$create = $_GET["create_date"];
$request_title = $_GET["title"];
$name = $_GET["customer_name"];
$assigned_to = $_GET["assigned_user"];
$request_status = $_GET["status"];
$request_priority = $_GET["priority"];
$request_description = $data["description"];
$request_type = $_GET["type"];
$start = $_GET["issue_start"];
$end_date = $_GET["issue_end"];
$type = $_GET["issue_type"];
$due_date = $_GET["request_due_date"];
$implement_date = $_GET["request_implement_date"];
$completion = $_GET["completion_date"];
$request_outcome = $_GET["outcome"];
$req$_GEToutcome_comment = $_GET["outcome_comment"];


$sql = "UPDATE IT_Requests SET user='00003' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET create='6/6/2016' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET request_title='Help' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET name='Steve' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET assigned_to='Blake' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET request_status='Open' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET request_priority='High' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET request_description='Help' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET request_type='Request' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET start='null' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET end_date='null' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET type='null' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET due_date='7/28/2016' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET implement_date='7/29/2016' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET completion='null' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET request_outcome='null' WHERE recordid=000045";
$sql = "UPDATE IT_Requests SET implement_date='null' WHERE recordid=000045";



if ($conn->query($sql) === TRUE) {
    echo "Record updated";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>