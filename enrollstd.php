<?php
session_start();
if(!isset($_SESSION["user"]))
header("location:ali.php");
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Staff Dealing</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">  
<link href="mystyle.css" rel="stylesheet">
<link href="mystyle2.css" rel="stylesheet">
<link href="mystyle3.css" rel="stylesheet">
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" > 
<div class="container">
<a class="navbar-brand" id="a">Course</a>
<button class="navbar-toggle"  data-toggle ="collapse" data-target= ".navHeaderCollapse"  >
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 </button>
 
<div class="collapse navbar-collapse  navHeaderCollapse">
<ul class="nav navbar-nav ">
<li class="hovr"> <a href="ali.php"> Back </a> </li>

</ul>
		</div> <!-- div nav collapse -->
	</div> <!-- div container -->
</div> <!-- div navbar -->

<div class="container-fluid" id="resize">
<div class="container" id="mtop">
<div class="container" id="setting">
<form class="field" method="POST" action="insertintosbjtbl.php"  enctype="multipart/form-data">
<h1 id="sid">Enroll students Here:</h1>



<label id="frwd2">Enrolled Students:</label><br>
<input type="text" name="enrolledstudents" id="move4" placeholder="Enrolled Students"></textarea><br>

<label id="frwd2">Roll no#:</label><br>
<input type="text" name="rollno" id="move4" placeholder="Roll no#"></textarea><br>

<center>
<button type="submit" class="btn btn-primary" name="submit" id="movefrwd2" >UPDATE</button>
</center>
</form>
</div>
</div></div>

		
<!-- for footer
<div class="navbar navbar-default navbar-fixed-bottom" >
<div class="container">
<p class="navbar-text pull-left">  Designed by Hamza Azeem </p>
<a href="http://www.hamzaazeem009.atwebpages.com" class="navbar-btn btn-danger btn pull-right"> VISIT MY SITE </a>
</div>
</div> -->
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
<?php
}
?>