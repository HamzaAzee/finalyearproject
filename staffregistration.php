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
	$reg = "INSERT INTO stafftable (staffid, name, password, designation, department, qualification, subjectassigned) VALUES('$sid', '$name', '$pass', '$dsg', '$dpt', '$qual', '$suas')";
	if(mysqli_query($db, $reg)){
	header("location:astaff.php");
	echo'<script>alert("Details Updates!")</script>';
}else{
	echo"error ".mysqli_error($db);
}
?>