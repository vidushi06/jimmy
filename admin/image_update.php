<?php 
include "dbcon.php";
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$filename = $_FILES['image']['name'];
	$tmpname = $_FILES['image']['tmp_name'];

	$file = "uploads/" .$filename;
	//print_r($file);
	move_uploaded_file($tmpname, $file);

	$update = "UPDATE admin set image = '$file' WHERE a_id = $id";
	$result = mysqli_query($con,$update);
	if($result){
		header("Location:admin.php");
	}
}


?>