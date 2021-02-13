<?php
include"connection.php";
session_start();

if(isset($_POST['report'])){
	
	$tb=$_POST['complaint'];
	$username = $_SESSION['username'];
	
	$sql = "UPDATE usertable SET complaints= '$tb' WHERE name='$username'";
	$result=mysqli_query($db, $sql);
	if($result){
		echo"success";
	}else{
		echo"error occured ".mysqli_error($db);
	}
}else{
	mysqli_error($db);
}
?>