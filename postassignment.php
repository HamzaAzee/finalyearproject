<?php
//error_reporting(0); 
include "connection.php";
session_start();
// If upload button is clicked ... 
if (isset($_POST['submit'])) {
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $sid = $_SESSION['staffid'];
    $folder = "postquiz/" . $filename;


    // Get all the submitted data from the form 
    // $sql = "INSERT INTO stafftable (quiz) VALUES ('$filename')"; 
    // $sql = "UPDATE stafftable SET assignment='$filename'  WHERE staffid='$sid'";
	$sql = "UPDATE subjecttable SET assignment='$filename'  WHERE staffid='$sid'";
    // Execute query 
    if (mysqli_query($db, $sql)) {
        if (move_uploaded_file($tempname, $folder)) {
            echo '<script>alert("Assignment uploaded successfully")</script>';
        } else {
            echo '<script>alert("Request failed")</script>';
        }
    } else {
       echo"error".mysqli_error($db);
    }
}
?>