<?php
include"connection.php";
if(isset($_POST['delete'])){
	$name=$_POST['user'];
	
	$sql="DELETE FROM usertable WHERE name='$name'";
	if(mysqli_query($db,$sql)){
		header("location:dltstudentform.php");
	}
	else{
		echo"error ".mysqli_error($db);
	}
}
?>