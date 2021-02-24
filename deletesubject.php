<?php
include"connection.php";
if(isset($_POST['delete'])){
	$suid=$_POST['subcode'];
	
	$sql="DELETE FROM subjecttable WHERE subcode='$suid'";
	if(mysqli_query($db,$sql)){
		header("location:deletesubform.php");
	}
	else{
		echo"error ".mysqli_error($db);
	}
}
?>