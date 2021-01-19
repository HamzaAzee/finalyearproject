<?php
session_start();
if(!isset($_SESSION["user"]))
header("location:adminlogin.html");
else
{
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet"> 
<link href="mystyle3.css" rel="stylesheet">
<link href="mystyle2.css" rel="stylesheet">
<link href="mystyle.css" rel="stylesheet">
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" id="rell"> 
<div class="container">
<a class="navbar-brand" href="/">
      <div class="logo-image">
            <img src="#" class="img-fluid">
      </div>
</a>
<a class="navbar-brand" id="a">Welcome<br>Admin</a>
<button class="navbar-toggle"  data-toggle ="collapse" data-target= ".navHeaderCollapse"  >
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 </button>
 
<div class="collapse navbar-collapse  navHeaderCollapse">

<ul class="nav navbar-nav ">
<li class="hovr"> <a href="index.html"> Home </a> </li>

<li class="hovr"> <a href="#"> LogOut </a> </li>
</ul>
		</div> <!-- div nav collapse -->
	</div> <!-- div container -->
</div>
<div class="container-fluid" id="resize">
<div class="w3-container" id="none">
<div class="row">
<div class="container" id="ctr">
            	<ul class="dropdown">
                   <div class="container" id="aikaik">
				   
				   <span><a id="size">Settings</a></span>
				   <div class="dropdown-content">
				   <a href="sliimg.html">Students</a> <br>   <!--page required-->
				   <a href="tchrpasswordreset.html">Staff</a>   <br>    <!--page required-->
				   <a href="tchrreport.html">Reported Complaints</a>       <!--page required-->
				   </ul>
				   </div>
				</div>
				
</div><br><br>
<div class="row">
<div class="container" id="ctr">
				<ul class="dropdown">
                   <div class="container" id="dodo">
				    
				   <span><a id="size">Perform Duties</a></span>
				   <div class="dropdown-content">
				   <a href="#">Display ALL</a> <br>   <!--page required-->
				   <a href="aannouncement.html">Announcements</a>       <!--page required-->
				   </ul>
				   </div>
				
			
</div><br><br>

</div></div>
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