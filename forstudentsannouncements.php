<?php
include"connection.php";
session_start();

$ann=$_POST['announcement'];

$sql="UPDATE usertable SET announcement='$ann'";
	if(mysqli_query($db, $sql)){
	echo"success";
}else{
	echo"error ".mysqli_error($db);
}
?>