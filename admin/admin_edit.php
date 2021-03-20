<?php

include "dbcon.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$data="SELECT * from admin where a_id=$id";
	$result=mysqli_query($con,$data);
	$x=mysqli_fetch_array($result);
}

if(isset($_POST['update']))
{
$a=$_POST ['name'];
$b=$_POST ['description'];
$c=$_POST ['email'];
$d=$_POST ['password'];
$filename=$_FILES ['image']['name'];
$tmpname=$_FILES['image']['tmp_name'];
$file='upload/'.$filename;

$data="UPDATE admin SET name ='$a', description ='$b' ,image = '$file',email ='$c',password = '$d' where a_id = $id";
$update=mysqli_query($con,$data);

	if ($update) {
		header("Location:admin.php");
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  include"header.php" ?>
	<?php  include"side_bar.php" ?>
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Add Blog</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Add Admin</a></li><!-- 
              <li class="breadcrumb-item active">Add Blog</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit admin</h3>
        <button class="btn btn-primary mr-auto " data-target="#aa"  data-toggle="modal" style="margin-left: 20px">Add </button>
      </div>
      <!-- /.card-header -->
      
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
                 		 <div class="form-group">
                    		<label>Name</label>
                    		<input type="text" name="title" class="form-control" value="<?php echo $x['name'] ?>">
                 		 </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $x['email'] ?>">
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" value="<?php echo $x['password'] ?>">
                     </div>
                 		 <div class="form-group">
                    		<label>Description</label>
                    		<input type="text" name="description" class="form-control" value="<?php echo $x['description'] ?>">
                  		</div>
                   		<div class="form-group">
                    		<label>image</label>
                    		<input type="file" name="image" class="form-control" value="<?php echo $x['image'] ?>">
                  		</div>
                  		<input type="submit" name="update" value="update" class="btn btn-info">
                 	</form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->	

	<?php include "footer.php" ?>
</body>
</html>