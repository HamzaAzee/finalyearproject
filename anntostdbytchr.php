<?php
include"connection.php";
session_start();

$ann=$_POST['announcement'];
$s="select * from studentannouncement";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);
	$reg = "INSERT INTO studentannouncement(annbytchr) VALUES('$ann')";
	if(mysqli_query($db, $reg)){
		
	echo"success";
}else{
	echo"error ".mysqli_error($db);
}
?>