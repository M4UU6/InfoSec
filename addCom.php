<?php
//include database connection file
include_once("config.php");

$message = $_POST['message'];
$PostDate = date("Y-m-d");

// insert data into table
$result = mysqli_query($mysqli, "INSERT INTO 
tblcomments(Message, PostDate)
VALUES('$message', '$PostDate')");

//show message when data is added
echo "<script>alert('Data added successfully.');</script>";
echo "<script>window.location.href = 'index.php';</script>";
?>  