<?php
include"connection.php";
session_start();

$sid=$_POST['staffid'];
$name=$_POST['name'];
$pass=$_POST['password'];
$dsg=$_POST['designation'];
$dpt=$_POST['department'];
$qual=$_POST['qualification'];


$s="select * from stafftable where staffid = '$sid'";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);

if($num == 1){
	echo"username already exists";
}else{
	$reg = "insert into stafftable(staffid, name, password, designation, department, qualification) values ('$sid', '$name', '$pass', '$dsg', '$dpt', '$qual')";
	mysqli_query($db, $reg);
	echo"registered";
	header('location:astaff.php');
}
?>