<?php
include "dbcon.php";

if(isset($_POST['submit']))
{
	
	$filename = $_FILES['image']['name'];
	$tmpname = $_FILES['image']['tmp_name'];

	$file = 'upload/'.$filename;
	// print_r($file);

	move_uploaded_file( $tmpname, $file);

	$data = "INSERT into slider(image,alt)VALUES('$file','$alt')";
	$result = mysqli_query($con, $data);

	if($result)
	{
		header('location:slider.php');
	}


}

?>