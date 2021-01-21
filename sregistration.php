<?php
include"connection.php";
session_start();

$name=$_POST['user'];
$eml=$_POST['email'];
$pass=$_POST['password'];
$roll=$_POST['roll'];

$s="select * from usertable where name = '$name'";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);

if($num == 1){
	echo"username already exists";
}else{
	$reg = "insert into usertable(name, rollno, email, password) values ('$name', '$roll', '$eml', '$pass')";
	mysqli_query($db, $reg);
	echo"registered";
	header('location:ali.php');
}
?>