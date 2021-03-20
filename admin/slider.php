<?php include "header.php" ?>
<?php include "side_bar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Slider Image</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Lead Management</a></li>
              <li class="breadcrumb-item active">Add Image</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <!-- card -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">View Image</h3>
            <button class="btn btn-primary mr-auto " data-target="#aa"  data-toggle="modal" style="float: right">Add Image</button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th class="w-50">Image1</th>
                  <th class="w-50">Image2</th>
                  <th class="w-50">Image3</th>
                  <th class="w-50">Image4</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  include "dbcon.php";
                  $data = "SELECT * FROM slider";
                  $result = mysqli_query($con, $data);
                  
                ?>

                <tr>
                  <td><?php echo $a['slider_id'] ?></td>
                  <td><img src="<?php echo $a['image'] ?>" class="w-25">
                    <br><br>
                    <form method="post" enctype="multipart/form-data">
                      <input type="hidden" name="slider_id" value="<?php echo $a['slider_id'] ?>">
                      <input type="file" name="image">
                      <br><br>
                      <input type="submit" name="update" value="update" class="btn btn-primary">
                    </form>

                  </td>
                  


                </tr>
                
              </tbody>

              <tfoot>
                
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<!--Add blog Modal-->
<div class="modal fade" id="aa" >
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-tittle" ><b>Add Image</b></h3>
       	<button type="button" class="btn btn-danger" style="border-radius: 50px" data-dismiss="modal" >x</button>
      </div>

    	<div class="modal-body">   

        <form method="post" enctype="multipart/form-data" action="slider_insert.php">
          
          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
          </div>

          <div class="form-group">
            <label>Sub Heading</label>
            <input type="text" name="alt" class="form-control">
          </div>

          <input type="submit" name="submit" class="btn btn-info">
        </form>

      </div>
    </div>
  </div>
</div>
<!--Add blog Modal-->





<?php include "footer.php" ?>


<?php

include "dbcon.php";

if(isset($_POST['update']))
{
  $id = $_POST['slider_id'];
  $filename = $_FILES['image']['name'];
  $tmpname = $_FILES['image']['tmp_name'];

  $file = 'upload/'.$filename;
  move_uploaded_file( $tmpname, $file);

  $data = "UPDATE slider SET image = '$file' WHERE slider_id = '$id' ";
  $result = mysqli_query($con,$data);

  

}

?>