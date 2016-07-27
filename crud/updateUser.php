<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "IT_Requests";

$conn = new mysqli("localhost", "root", "", "IT_Requests");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$jsondata = file_get_contents("../data/users.json");
$data = json_decode($jsondata, true);

 $pass = $_GET['password'];
 $name = $_GET['fullname'];
 $user_status = $_GET['status'];


$sql = "UPDATE IT_Requests SET password='P@55word' WHERE userid=00004";
$sql = "UPDATE IT_Requests SET name='Jim Philips' WHERE userid=00004";
$sql = "UPDATE IT_Requests SET user_status='Inactive' WHERE userid=00004";



if ($conn->query($sql) === TRUE) {
    echo "Record updated";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
