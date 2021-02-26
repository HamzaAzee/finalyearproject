<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:index.html");
}
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="css/style.css" rel="stylesheet"> 
<link href="mystyle2.css" rel="stylesheet">
<link href="mystyle3.css" rel="stylesheet">
<link href="mystyle.css" rel="stylesheet">
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top" id="nv"> 
<div class="container">
<a class="navbar-brand" id="a">Quiz</a>
<button class="navbar-toggle"  data-toggle ="collapse" data-target= ".navHeaderCollapse"  >
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 <span class="icon-bar"> </span>
 </button>
 
<div class="collapse navbar-collapse  navHeaderCollapse">
<ul class="nav navbar-nav ">
<li class="hovr"> <a href="sli.php"> Back </a> </li>

</ul>
		</div> <!-- div nav collapse -->
	</div> <!-- div container -->
</div><!-- div navbar -->
<div class="container-fluid" id="resize">
<div class="container" id="none">
<div class="container" id="setting">
<form action="submitquiz.php" method="POST" enctype="multipart/form-data">
<div height="relative">
<h1 id="sid">Quizes</h1>
<center><table border=0 width=95% cellspacing="15"></center>
<tr>
<th>Subject Code</th>
<th>Subject Name</th>
<th>Quiz by</th>
<th>Quiz</th>
<th>Submit Quiz</th>
</tr>

<?php
include"connection.php";
$name=$_SESSION['username'];
$sql="SELECT `subcode`, `subname`, `assignedto`, `quiz` FROM `subjecttable` WHERE enrolledstudents='$name'";
$result=mysqli_query($db,$sql);
while($rows=mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".$rows['subcode']."</td>";
echo"<td>".$rows['subname']."</td>";
echo"<td>".$rows['assignedto']."</td>";
echo "<td>";
?>

<a href="postquiz/<?php echo $rows['quiz']; ?>" class="img-fluid"><?php echo $rows['quiz']; ?></a></td>


<td><input type="file" name="quiz" id="move"/><br>
<button type="submit" class="btn btn-success" name="submit" id="move">Submit assignment</button></td>
</tr>
<?php
}
?>
</table>
</div>
</form>
</div>
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
