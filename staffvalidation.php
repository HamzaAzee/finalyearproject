<?php
include"connection.php";
session_start();

$sid=$_POST['staffid'];
$name=$_POST['username'];
$pass=$_POST['password'];

$s="select * from stafftable where staffid = '$sid' && name ='$name' && password='$pass'";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);

if($num == 1){
	$_SESSION['staffid'] = $sid;
	header("location:tli.php");
}else{
	header("location:teacherlogin.php");
}
?>