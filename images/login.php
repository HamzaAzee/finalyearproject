<!DOCTYPE html>
<html lang="en">
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
			<li> <a href=""> Contact Us </a> </li>
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
          <br>
          <center><h1> Login Here </h1> </center>
    <form class="form-container" method="post" action="logindata.php">
    
      <div class="form-group">
       <label>User </label>
       <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
       <input type="text" name="user" id="user" class="form-control" placeholder="User">
      </div>
      <div class="form-group">
       <label>Password </label>
       <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
       <input type="password" name="pass" class="form-control" placeholder="Password">
      </div>
      
      <div class="form-group">
       <label>  </label>
       <button type="submit" href="insertion.html" >LogIn<button>
      </div>
          </form> 
        </div>
	</div>
</div>       
<!-- for footer -->
<div class="navbar navbar-default navbar-fixed-bottom" >
<div class="container">
<p class="navbar-text pull-left"> Designed by Waheed Anwar </p>
<a href="http://www.waheed.me" class="navbar-btn btn-info btn pull-right"> Subscribe to Waheed.me </a>
</div>
</div>
</body>
</html>
