<?php
include"connection.php";
session_start();

$suid=$_POST['subcode'];
$name=$_POST['subname'];
$asn=$_POST['assignedto'];
$sid=$_POST['staffid'];

$s="select * from subjecttable where subcode = '$suid'";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);
	$reg = "UPDATE subjecttable SET subname='$name', assignedto='$asn', staffid='$sid' WHERE subcode='$suid'";
	if(mysqli_query($db, $reg)){
	header("location:updatesub.php");
	echo'<script>alert("Details Updates!")</script>';
}else{
	echo"error";
}
?>