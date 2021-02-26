<?php
include"connection.php";
session_start();

$suid=$_POST['subcode'];
$name=$_POST['subname'];
$asn=$_POST['assignedto'];
$sid=$_POST['staffid'];
$erd=$_POST['enrolledstudents'];
$roll=$_POST['rollno'];

// $s="select * from subjecttable where subcode = '$suid'";
// $result = mysqli_query($db, $s);

// $num= mysqli_num_rows($result);

// if($num == 1){
//	echo"Subject already exists";
//}else{ 
	$reg = "insert into subjecttable(subcode, subname, assignedto, staffid, enrolledstudents, rollno) values ('$suid', '$name', '$asn', '$sid', '$erd', '$roll')";
	if(mysqli_query($db, $reg))
	echo '<script>alert("Subject added")</script>';
	
?>