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
<a class="navbar-brand" id="a">Staff</a>
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
<h1 id="sid">Deal With Staff Here:</h1>
<label id="frwd2">Staff ID:</label><br>
<input type="text" name="staffid" id="move4" placeholder="Staff ID"></textarea><br>
<label id="frwd2">Name:</label><br>
<input type="text" name="name" id="move4" placeholder="Name"></textarea><br>
<label id="frwd2">Designation:</label><br>
<input type="text" name="designation" id="move4" placeholder="Designation"></textarea><br>
<label id="frwd2">Department:</label><br>
<input type="text" name="department" id="move4" placeholder="Department"></textarea><br>
<label id="frwd2">Qualification:</label><br>
<input type="text" name="qualification" id="move4" placeholder="Qualification"></textarea><br>
<button type="submit" class="btn btn-success" name="submit" id="movefrwd">Submit</button>
<button type="submit" class="btn btn-danger" name="submit" id="movefrwd2">Submit</button>
<button type="submit" class="btn btn-warning" name="submit" id="movefrwd3">Submit</button>
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