<?php
//error_reporting(0); 
include "connection.php";
session_start();
// If upload button is clicked ... 
if (isset($_POST['upload'])) {
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $sid = $_SESSION['staffid'];
    $folder = "images/" . $filename;


    // Get all the submitted data from the form 
    // $sql = "INSERT INTO stafftable (pics) VALUES ('$filename')"; 
    $sql = "UPDATE stafftable SET pics='$filename'  WHERE staffid='$sid'";
    // Execute query 
    if (mysqli_query($db, $sql)) {
        if (move_uploaded_file($tempname, $folder)) {
            echo '<script>alert("Image updated successfully")</script>';
        } else {
            echo '<script>alert("Request failed")</script>';
        }
    } else {
        mysqli_error($db);
    }
}
?>