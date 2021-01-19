<?php
session_start();
header("location:index.html");
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration2');

$name=$_POST['user'];
$eml=$_POST['email'];
$pass=$_POST['password'];

$s="select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num == 1){
	echo"<script>alret('username already exists')</script>";
}else{
	$reg = "insert into usertable(name, email, password) values ('$name', '$eml', '$pass')";
	mysqli_query($con, $reg);
	echo"registered";
}
?>