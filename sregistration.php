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

if($num == 1){
	echo"username already exists";
}else{
	$reg = "insert into usertable(name, rollno, email, password, program, semester, cgpa) values ('$name', '$roll', '$eml', '$pass', '$prog', '$sem', '$cgp')";
	mysqli_query($db, $reg);
	echo"registered";
	header('location:ali.php');
}
?>