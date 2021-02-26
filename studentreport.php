<?php
include"connection.php";
session_start();

if(isset($_POST['report'])){
	
	$tb=$_POST['complaint'];
	$username = $_SESSION['username'];
	
	$sql = "UPDATE usertable SET complaints= '$tb' WHERE name='$username'";
	$result=mysqli_query($db, $sql);
	if($result){
		echo '<script>alert("Copmlaint reported")</script>';
	}else{
		echo '<script>alert("Request failed")</script>';
	}
}else{
	mysqli_error($db);
}
?>