<?php
//error_reporting(0); 
include "connection.php";
session_start();
// If upload button is clicked ... 
if (isset($_POST['upload'])) {
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $username = $_SESSION['username'];
    $folder = "images/" . $filename;


    // Get all the submitted data from the form 
    // $sql = "INSERT INTO stafftable (pics) VALUES ('$filename')"; 
    $sql = "UPDATE stafftable SET pics='$filename'  WHERE name='$username'";
    // Execute query 
    if (mysqli_query($db, $sql)) {
        if (move_uploaded_file($tempname, $folder)) {
            echo "<script>alert('Image Uploaded')</script>";
            header('location:tli.php');
        } else {
            echo "<script>alert('IFailed to upload image')</script>";
        }
    } else {
        mysqli_error($db);
    }
}
?>