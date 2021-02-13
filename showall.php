<?php
session_start();
if(!isset($_SESSION["user"]))
header("location:adminlogin.html");
else
{
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="showall2.css" />
<center><h1 style="font-family:Bodoni MT Black;color:coral;">ADMIN PANEL</h1></center>
</head>
<body>
<center><table border=0 width=80% cellspacing="18"></center>
<tr>
<th>Name</th>
<th>Roll NO</th>
<th>Email</th>
<th>Password</th>
<th>Program</th>
<th>Semester</th>
<th>CGPA</th>
<th>Pics</th>
<th>Fee Voucher</th>
<th>Complaints</th>
</tr>
<?php
include"connection.php";

$sql="select * from usertable";
$result=mysqli_query($db,$sql);
while($rows=mysqli_fetch_array($result))
{
echo"<tr align=center>";
echo"<td>".$rows['name']."</td>";
echo"<td>".$rows['rollno']."</td>";
echo"<td>".$rows['email']."</td>";
echo"<td>".$rows['password']."</td>";
echo"<td>".$rows['program']."</td>";
echo"<td>".$rows['semester']."</td>";
echo"<td>".$rows['cgpa']."</td>";
echo"<td>".$rows['pics']."</td>";
echo"<td>".$rows['feeimg']."</td>";
echo"<td>".$rows['complaints']."</td>";
		 echo"<td>"
?>
           <img style="width: 71px;" src="<?php echo $rows['pics']; ?>" class="img-fluid"></td>
		   <?php
		   echo"</tr>";
}
?>
		</table></body></html>
<?php
}
?>