<?php
include"connection.php";
session_start();

$ann=$_POST['announcement'];

$s="select * from staffannouncementstbl";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);
	$reg = "INSERT INTO staffannouncementstbl(announcement) VALUES('$ann')";
	if(mysqli_query($db, $reg)){
		
	echo '<script>alert("announcement made successfully")</script>';
}else{
	echo '<script>alert("Request failed")</script>';
}
?>