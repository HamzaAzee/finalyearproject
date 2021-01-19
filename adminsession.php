
<?php
session_start();

$_user = $_REQUEST['user'];
$_pass = $_REQUEST['pass'];


if($_user=="admin"&&$_pass=="123")
{
$_SESSION['user'] = $_user;
header("location:sli.html");
}
else{
echo "wrong user name or password";
}
?>
