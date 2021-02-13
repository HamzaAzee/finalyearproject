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
<th>Staff ID</th>
<th>Name</th>
<th>Password</th>
<th>Designation</th>
<th>Department</th>
<th>Qualification</th>
<th>Pics</th>
<th>Complaints</th>
</tr>
<?php
include"connection.php";

$sql="select * from stafftable";
$result=mysqli_query($db,$sql);
while($rows=mysqli_fetch_array($result))
{
echo"<tr align=center>";
echo"<td>".$rows['staffid']."</td>";
echo"<td>".$rows['name']."</td>";
echo"<td>".$rows['password']."</td>";
echo"<td>".$rows['designation']."</td>";
echo"<td>".$rows['department']."</td>";
echo"<td>".$rows['qualification']."</td>";
echo"<td>".$rows['pics']."</td>";
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