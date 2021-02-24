<?php
include"connection.php";
if(isset($_POST['delete'])){
	$sid=$_POST['staffid'];
	
	$sql="DELETE FROM stafftable WHERE staffid='$sid'";
	if(mysqli_query($db,$sql)){
		header("location:deletestaffform.php");
	}
	else{
		echo"error ".mysqli_error($db);
	}
}
?>