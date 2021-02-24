<?php
include"connection.php";
session_start();

if (isset($_POST['reset'])) {
$sid = $_SESSION['staffid'];
$pass=$_POST['password'];
    

	$reg = "UPDATE stafftable SET password='$pass'  WHERE staffid='$sid'";
	if(mysqli_query($db, $reg)){
	header('location:tli.php');
	echo "<script>alert('Password changed')</script>";
	}else{
		echo"Wrong staffid";
	}
}
?>