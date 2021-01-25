<?php
include"connection.php";
session_start();

if (isset($_POST['reset'])) {
$name=$_POST['username'];
$pass=$_POST['password'];
    

	$reg = "UPDATE usertable SET password='$pass'  WHERE name='$name'";
	if(mysqli_query($db, $reg)){
	header('location:sli.php');
	echo "<script>alert('Password changed')</script>";
	}else{
		echo"Wrong username";
	}
}
?>