<?php
session_start();
if(!isset($_SESSION["user"]))
header("location:adminlogin.html");
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Admin Student Dealing</title>
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
<a class="navbar-brand" id="a">Students</a>
<button class="navbar-toggle"  data-toggle ="collapse" data-target= ".navHeaderCollapse"  >
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 </button>
 
<div class="collapse navbar-collapse  navHeaderCollapse">
<ul class="nav navbar-nav ">
<li class="hovr"> <a href="ali.html"> Back </a> </li>

</ul>
		</div> <!-- div nav collapse -->
	</div> <!-- div container -->
</div> <!-- div navbar -->

<div class="container-fluid" id="resize">
<div class="container" id="mtop">
<div class="container" id="setting">
<form class="field" method="POST" action="sregistration.php"  enctype="multipart/form-data">
<h1 id="sid">Deal With Students Here:</h1>
<label id="frwd2">Roll No#:</label><br>
<input type="text" name="roll" id="move4" placeholder="Roll No#"></textarea><br>
<label id="frwd2">Username</label>
<input type="text" name="user" id="move4" placeholder="Enter Username" />
<label id="frwd2">Email</label>
<input type="email" name="email" id="move4" placeholder="Enter Username" />
<label id="frwd2">Password</label>
<input type="password" name="password" id="move4" placeholder="Enter Username" />
<label id="frwd2">Program:</label><br>
<input type="text" name="program" id="move4" placeholder="Program"></textarea><br>
<label id="frwd2">Semester:</label><br>
<input type="text" name="semester" id="move4" placeholder="Semester"></textarea><br>
<label id="frwd2">CGPA:</label><br>
<input type="text" name="cgpa" id="move4" placeholder="CGPA"></textarea><br><br>
<center><button type="submit" class="btn btn-danger" name="submit" id="movefrwd3" action="sregistration.php">INSERT</button>
<a class="btn btn-primary" id="movefrwd2" href="updatestudent.php">UPDATE</a>
<button type="submit" class="btn btn-warning" id="movefrwd3">DELETE</button></center>
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