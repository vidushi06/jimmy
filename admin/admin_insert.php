<?php

include "dbcon.php";
if(isset($_POST['submit']))
 $a=$_POST ['name'];
 $b=$_POST ['email'];
 $c=$_POST ['password'];
 $d=$_POST ['description'];
 $filename=$_FILES['image']['name'];
 $tmpname=$_FILES['image']['tmp_name'];
 $file="upload/".$filename;
			//print_r($file);
 move_uploaded_file($tmpname,$file);
 $data ="INSERT INTO admin(name,email,password,image,description)values('$a','$b','$c','$file','$d') ORDER BY a_id DESC";
 $v=mysqli_query($con,$data);
if($v){
	header("Location:admin.php");
}
?>