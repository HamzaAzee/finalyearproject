<?php
include"connection.php";
session_start();

$name=$_POST['user'];
$eml=$_POST['email'];
$pass=$_POST['password'];
$roll=$_POST['roll'];
$prog=$_POST['program'];
$sem=$_POST['semester'];
$cgp=$_POST['cgpa'];

$s="select * from usertable where name = '$name'";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);
	$reg = "UPDATE usertable SET email='$eml', password='$pass', rollno='$roll', program='$prog', semester='$sem', cgpa='$cgp'  WHERE name='$name'";
	if(mysqli_query($db, $reg)){
	header("location:updatestudent.php");
	echo'<script>alert("Details Updates!")</script>';
}else{
	echo"error";
}
?>