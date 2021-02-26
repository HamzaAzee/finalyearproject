<?php
include"connection.php";
session_start();

if (isset($_POST['reset'])) {
$name = $_SESSION['username'];
$pass=$_POST['password'];
    

	$reg = "UPDATE usertable SET password='$pass'  WHERE name='$name'";
	if(mysqli_query($db, $reg)){
	
	echo '<script>alert("Password reset successfully")</script>';
	}else{
		echo '<script>alert("Request failed")</script>';
	}
}
?>