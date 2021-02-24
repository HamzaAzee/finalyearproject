<?php
include"connection.php";
session_start();

$ann=$_POST['announcement'];

$sql="INSERT INTO usertable(announcement) VALUES('$ann')";
	if(mysqli_query($db, $sql)){
	echo"success";
}else{
	echo"error ".mysqli_error($db);
}
?>