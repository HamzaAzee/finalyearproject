<?php
include"connection.php";
session_start();

$suid=$_POST['subcode'];
$name=$_POST['subname'];
$asn=$_POST['assignedto'];
$sid=$_POST['staffid'];
$erd=$_POST['enrolledstudents'];
$roll=$_POST['rollno'];

$s="select * from subjecttable where subcode = '$suid'";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);
	$reg = "UPDATE subjecttable SET subname='$name', assignedto='$asn', staffid='$sid', enrolledstudents='$erd', rollno='$roll' WHERE subcode='$suid'";
	if(mysqli_query($db, $reg)){
	echo '<script>alert("Subject updated successfully")</script>';
}else{
	echo '<script>alert("Request failed")</script>';
}
?>