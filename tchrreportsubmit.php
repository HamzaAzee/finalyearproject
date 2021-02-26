<?php
include"connection.php";
session_start();

if(isset($_POST['submit'])){
	
	$tb=$_POST['textbox'];
	$sid = $_SESSION['staffid'];
	
	$sql = "UPDATE stafftable SET complaints= '$tb' WHERE staffid='$sid'";
	$result=mysqli_query($db, $sql);
	if($result){
		echo '<script>alert("Complaint reported successfully")</script>';
	}else{
		echo '<script>alert("Request failed")</script>';
	}
}else{
	mysqli_error($db);
}
?>