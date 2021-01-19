<?php
if(isset($_POST['upload'])){
	$file_name= $_FILES['file']['name'];
	$file_type= $_FILES['file']['type'];
	$file_size= $_FILES['file']['size'];
	$file_tem_loc= $_FILES['file']['tem_name'];
	$file_store= "images/".$file_name;
	
	if(move_uploaded_file($file_tem_loc, $file_store)){
		echo"uploaded";
	}
}
?>


<?php
$folder="images/";
if(is_dir($folder)){
	if($open = opendir($folder)){
		while(($file = readdir($open)) !=false){
			if($file == '.' || $file == '..') continue;
			echo'<img src= "images/'.$file.'"width=46px height=46px>';
		}
		closedir($open);
	}
}
?>