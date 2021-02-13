<?php
session_start();
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
     if($user=="admin" and $pass=="sub1-1")
      {
       $_SESSION['user'] = $user;
       header("location:ali.php");
      } 
    else
       echo "wrong user name or password";
      }
else{
	echo"retry";
    }
?>
