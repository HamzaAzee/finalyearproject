<?php
//error_reporting(0); 
include "connection.php";
session_start();
// If upload button is clicked ... 

if (isset($_POST['submit'])) {
	$suid=$_POST['subcode'];
    $filename = $_FILES["quiz"]["name"];
    $tempname = $_FILES["quiz"]["tmp_name"];
    $username = $_SESSION['username'];
	
    $folder = "submitdocs/" . $filename;


    // Get all the submitted data from the form 
     //$sql = "INSERT INTO usertable (quiza) VALUES ('$filename')"; 
   $s="select * from subjecttable where subcode = '$suid'";
$result = mysqli_query($db, $s);

$num= mysqli_num_rows($result);
	$reg = "UPDATE subjecttable SET quiza='$filename' WHERE enrolledstudents='$username' AND subcode='$suid'";
	if(mysqli_query($db, $reg)){
 if (move_uploaded_file($tempname, $folder)) {
            echo "success";
        } else {
            echo "error ".mysqli_error($db);
        }
}else{
	echo"error ".mysqli_error($db);
}
}
?>