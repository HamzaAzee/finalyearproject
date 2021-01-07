<?php
session_start();
if(!isset($_SESSION["user"]))
header("location:login.php");
else
{
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Start Bootstrap</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body class="bg">
<div class="navbar navbar-inverse navbar-static-top"> 
<div class="container">
<a href="#" class="navbar-brand">Database Operation</a>
<button class="navbar-toggle"  data-toggle ="collapse" data-target= ".navHeaderCollapse"  >
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 </button>
	<div class="collapse navbar-collapse  navHeaderCollapse">
		<ul class="nav navbar-nav ">
			<li> <a href="index.html"> Home </a> </li>
			<li class="active"> <a href="insertion.php"> Insertion </a> </li>
			<li> <a href="showall.php"> Show All </a> </li>
            <li> <a href="logout.php"> logout </a> </li>
			<li> <a href="contact.html"> Contact Us </a> </li>
		</ul>
	</div> <!-- div nav collapse -->
</div> <!-- div container -->
</div> <!-- div navbar -->

<!-- for Columns -->
<div class="container-fluid">
	<div class="row">
    	<div class="col-md-4 col-sm-4 col-xs-12"></div>
         <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- form fields -->  
    <form class="form-container" method="get" action="insertdata.php">
      <div class="form-group">
       <label>Rollno </label>
       <input type="text" name="rollno" class="form-control" placeholder="Rollno">
      </div>
      <div class="form-group">
       <label>Name </label>
       <input type="text" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
       <label>Class </label>
       <input type="text" name="class" class="form-control" placeholder="Class">
      </div>
      <div class="form-group">
       <label>GPA </label>
       <input type="text" name="gpa" class="form-control" placeholder="gpa">
      </div>
      <div class="form-group">
       <label>  </label>
       <input type="submit" name="submit" class="btn btn-success btn-block"  value="Add Student">
      </div>
          </form> 
        </div>
	</div>
</div>       
<!-- for footer -->
<div class="navbar navbar-default navbar-fixed-bottom" >
<div class="container">
<p class="navbar-text pull-left"> Designed by Waheed Anwar </p>
<a href="http://www.bscs.atawardspace.com" class="navbar-btn btn-info btn pull-right"> Subscribe to bscs.atawardspace.com </a>
</div>
</div>
</body>
</html>
<?php
}
?>
