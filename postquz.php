<?php
//error_reporting(0); 
include "connection.php";
session_start();
// If upload button is clicked ... 
if (isset($_POST['upload'])) {
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $name=$_SESSION['username'];
	$sn=$_POST['subname'];
    $target = "submit/" . $filename;


    // Get all the submitted data from the form 
    // $sql = "INSERT INTO stafftable (quiz) VALUES ('$filename')"; 
    // $sql = "UPDATE stafftable SET assignment='$filename'  WHERE staffid='$sid'";
	$sql = "UPDATE subjecttable SET quiza='$filename'  WHERE enrolledstudents='$name' AND subname='$sn'";
    // Execute query 
    if (mysqli_query($db, $sql)) {
        if (move_uploaded_file($tempname, $target)) {
            echo '<script>alert("Quiz uploaded successfully")</script>';
        } else {
            echo "error ".mysqli_error($db);
        }
    } else {
       echo"error".mysqli_error($db);
    }
}
?>