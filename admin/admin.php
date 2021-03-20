<?php include "header.php" ?>
<?php include "side_bar.php" ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <!-- <li class="breadcrumb-item active">Add admin</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Admin</h3>
                <button class="btn btn-primary mr-auto " data-target="#aa"  data-toggle="modal" style="margin-left: 20px">Add admin</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>image</th>
                    <th>description</th>
                    <th>created at</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                     include "dbcon.php";
                    $data= "SELECT * from admin ORDER BY a_id desc";
                     $result=mysqli_query($con,$data);
                      while($a=mysqli_fetch_array($result)){
                  ?>

                    <tr>
                    <td><?php echo $a['a_id'] ?></td>
                    <td><?php echo $a['name'] ?></td>
                    <td><?php echo $a['email'] ?></td>
                    <td><?php echo $a['password'] ?></td>
                    <td>
                      <img src="<?php echo $a['image'] ?>" style="height: 190px;width: 280px;margin:auto;">
                      <br>
                      <form method="post" enctype="multipart/form-data" action="image_update.php" >
                        <input type="hidden" name="id" value="<?php echo $a['a_id'] ?>"><br>
                        <input type="file" name="image"><br><br>
                        <input type="submit" name="update" value="update" class="btn btn-dark">
                      </form>


                    </td>
                    <td><?php echo $a['description'] ?></td>
                    <td><?php echo $a['created_at'] ?></td>
                    <td>
                      <a href="admin_edit.php?id=<?php echo $a['a_id'] ?>" class="btn btn-primary">edit</a>
                      <a href="admin_delete.php?id=<?php echo $a['a_id'] ?>" class="btn btn-danger">delete</a>
                    </td>
                    </tr>

                    <?php } ?>
                  
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









<?php include "footer.php" ?>

<!--pop up-->
<div class="modal fade" id="aa" >
        <div class="modal-dialog"  >
            <div class="modal-content">
            	<div class="modal-header">
            	<h3 class="modal-tittle">Add Admin</h3>
            	 <button type="button" class="" data-dismiss="modal" ></button>
                </div>
            	<div class="modal-body">
            	   <form method="post" enctype="multipart/form-data" action="admin_insert.php">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" name="description" class="form-control"></textarea>
                  </div>
                   
                  <input type="submit" name="submit" class="btn btn-info">
                 </form>	
            </div>
        </div>
</div>
<!--end pop up-->





