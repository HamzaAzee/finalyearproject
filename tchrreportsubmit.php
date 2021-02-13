<?php
include"connection.php";
session_start();

if(isset($_POST['submit'])){
	
	$tb=$_POST['textbox'];
	$sid = $_SESSION['staffid'];
	
	$sql = "UPDATE stafftable SET complaints= '$tb' WHERE staffid='$sid'";
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