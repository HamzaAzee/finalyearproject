<?php
include"connection.php";
session_start();

if (isset($_POST['reset'])) {
$sid = $_SESSION['staffid'];
$pass=$_POST['password'];
    

	$reg = "UPDATE stafftable SET password='$pass'  WHERE staffid='$sid'";
	if(mysqli_query($db, $reg)){
	
	echo '<script>alert("Password Reset successfully")</script>';
	}else{
		echo '<script>alert("Request failed")</script>';
	}
}
?>