<?php
include"connection.php";
session_start();

$sid=$_POST['staffid'];
$name=$_POST['name'];
$pass=$_POST['password'];
$dsg=$_POST['designation'];
$dpt=$_POST['department'];
$qual=$_POST['qualification'];
$suas=$_POST['subjectassigned'];

$s="select * from stafftable where staffid = '$sid'";
$result = mysqli_query($db, $s);
$num= mysqli_num_rows($result);
	$reg = "UPDATE stafftable SET name='$name', password='$pass', designation='$dsg', department='$dpt', qualification='$qual', subjectassigned='$suas' WHERE staffid='$sid'";
	if(mysqli_query($db, $reg)){
	echo '<script>alert("Staff member updated successfully")</script>';
}else{
	echo '<script>alert("Request failed")</script>';
}
?>