<?php

include "dbcon.php";

if(isset($_POST['submit'])){
	$a=$_POST['email'];
	$b=$_POST['password'];

	$data = "SELECT * FROM admin WHERE email  = '$a' && password ='$b'";
	$res = mysqli_query($con,$data);

	$final = mysqli_num_rows($res);

	if($final==1){
        $_SESSION['a'] = $a;
		header('Location:index.php');
	}
	else{
		echo "<script> alert('please check username or password') </script>";
	}
}

?>