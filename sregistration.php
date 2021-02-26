<?php
include"connection.php";
session_start();

$name=$_POST['user'];
$roll=$_POST['roll'];
$eml=$_POST['email'];
$pass=$_POST['password'];
$prog=$_POST['program'];
$sem=$_POST['semester'];
$cgp=$_POST['cgpa'];

$s="select * from usertable where name = '$name'";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);
	$reg = "INSERT INTO usertable (name, rollno, email, password, program, semester, cgpa) VALUES('$name', '$roll', '$eml', '$pass', '$prog', '$sem', '$cgp')";
	if(mysqli_query($db, $reg)){
	header("location:astudent.php");
	echo '<script>alert("Student registered successfully")</script>';
}else{
	echo '<script>alert("Request failed")</script>';
}
?>