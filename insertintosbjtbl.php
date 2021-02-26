<?php
include"connection.php";
session_start();

$erd=$_POST['enrolledstudents'];
$roll=$_POST['rollno'];


$reg = "INSERT INTO subjecttable (enrolledstudents, rollno) VALUES ('$erd', '$roll')";
	if(mysqli_query($db, $reg)){
	header("location:updatesub.php");
	echo'<script>alert("Details Updates!")</script>';
}else{
	echo"error";
}
?>