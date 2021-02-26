<?php
include"connection.php";
if(isset($_POST['delete'])){
	$sid=$_POST['staffid'];
	
	$sql="DELETE FROM stafftable WHERE staffid='$sid'";
	if(mysqli_query($db,$sql)){
		echo '<script>alert("Staff member deleted")</script>';
	}
	else{
		echo '<script>alert("Request failed")</script>';
	}
}
?>