<?php
//error_reporting(0); 
include "connection.php";
session_start();
// If upload button is clicked ... 
if (isset($_POST['submit'])) {
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $name = $_SESSION['username'];
    
    $folder = "submitdocs/".$filename;


    // Get all the submitted data from the form 
    // $sql = "INSERT INTO stafftable (quiz) VALUES ('$filename')"; 
    // $sql = "UPDATE stafftable SET assignment='$filename'  WHERE staffid='$sid'";
	$sql = "UPDATE `subjecttable` SET `assignmenta`='$filename'  WHERE `enrolledstudents`='$name'";
    // Execute query 
    mysqli_query($db, $sql) ;
        if (move_uploaded_file($tempname, $folder)) {
            echo "success";
        } else {
            echo "error ".mysqli_error($db);
        }
    } else {
       echo"error".mysqli_error($db);
    }
?>