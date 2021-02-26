<?php
include"connection.php";
if(isset($_POST['delete'])){
	$suid=$_POST['subcode'];
	
	$sql="DELETE FROM subjecttable WHERE subcode='$suid'";
	if(mysqli_query($db,$sql)){
		echo '<script>alert("Subject deleted successfully")</script>';
	}
	else{
		echo '<script>alert("Request failed")</script>';
	}
}
?>