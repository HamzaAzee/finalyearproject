<?php
session_start();
if(!isset($_SESSION['staffid'])){
header("location:teacherlogin.php");
}
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Reset</title>
  <link href="css/style.css" rel="stylesheet"> 
<link href="mystyle2.css" rel="stylesheet">
<link href="mystyle3.css" rel="stylesheet">
<link href="mystyle.css" rel="stylesheet">
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" id="rell" > 
<div class="container">
<a class="navbar-brand" id="a">Teacher's Reset Password</a>
<button class="navbar-toggle"  data-toggle ="collapse" data-target= ".navHeaderCollapse"  >
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 </button>
 
<div class="collapse navbar-collapse  navHeaderCollapse">

<ul class="nav navbar-nav ">
<li class="hovr"> <a href="index.html"> Login </a> </li>

</ul>
		</div> <!-- div nav collapse -->
	</div> <!-- div container -->
</div><!-- div navbar -->

<div class="container" id="on">
<div class="container" id="resp">
<form action="passwordresetforstaff.php" method="POST" enctype="multipart/form-data">

<label id="dsgn">Password</label>
<input type="password" name="password" id="anim" class="form-control" placeholder="password" /><br>
<button type="submit" class="btn btn-danger" name="reset" id="btn-dngr">Reset</button></form>
</div>
</div>
<div class="footr">
<div>
<h5>Contact Info:</h5>
<ul>
<li>ph# 03428395415</li>
<li>Mobile: 03428395415</li>
</ul>
<h5>Email:</h5>
<ul>
<li><link>Email: bond91153@gmail.com</link></li>
<li><link>prada3213@gmail.com</link></li>
</ul>
</div>
</div>
<div class="end">
<h6>Privacy Policy</h6>
</div>

</body>
</html>
