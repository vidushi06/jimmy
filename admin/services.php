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
                	<?php
                     include "dbcon.php";
                    $data= "SELECT * from admin ORDER BY a_id desc";
                     $result=mysqli_query($con,$data);
                      while($a=mysqli_fetch_array($result)){
                  ?>
                  <thead>
                  <tr>
                    <th>Id</th>
                    <td><?php echo $a['s_id'] ?></td>
                    <td>
                      <a href="admin_edit.php?id=<?php echo $a['a_id'] ?>" class="btn btn-primary">edit</a>
                      <a href="admin_delete.php?id=<?php echo $a['a_id'] ?>" class="btn btn-danger">delete</a>
                    </td>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <th>Id</th>
                    <td><?php echo $a['a_id'] ?></td>
                    <td>
                      <a href="admin_edit.php?id=<?php echo $a['a_id'] ?>" class="btn btn-primary">edit</a>
                      <a href="admin_delete.php?id=<?php echo $a['a_id'] ?>" class="btn btn-danger">delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th>Id</th>
                    <td><?php echo $a['a_id'] ?></td>
                    <td>
                      <a href="admin_edit.php?id=<?php echo $a['a_id'] ?>" class="btn btn-primary">edit</a>
                      <a href="admin_delete.php?id=<?php echo $a['a_id'] ?>" class="btn btn-danger">delete</a>
                    </td>
                  </tr><tr>
                    <th>Id</th>
                    <td><?php echo $a['a_id'] ?></td>
                    <td>
                      <a href="admin_edit.php?id=<?php echo $a['a_id'] ?>" class="btn btn-primary">edit</a>
                      <a href="admin_delete.php?id=<?php echo $a['a_id'] ?>" class="btn btn-danger">delete</a>
                    </td>
                  </tr><tr>
                    <th>Id</th>
                    <td><?php echo $a['a_id'] ?></td>
                    <td>
                      <a href="admin_edit.php?id=<?php echo $a['a_id'] ?>" class="btn btn-primary">edit</a>
                      <a href="admin_delete.php?id=<?php echo $a['a_id'] ?>" class="btn btn-danger">delete</a>
                    </td>
                  </tr><tr>
                    <th>Id</th>
                    <td><?php echo $a['a_id'] ?></td>
                    <td>
                      <a href="admin_edit.php?id=<?php echo $a['a_id'] ?>" class="btn btn-primary">edit</a>
                      <a href="admin_delete.php?id=<?php echo $a['a_id'] ?>" class="btn btn-danger">delete</a>
                    </td>
                  </tr><tr>
                    <th>Id</th>
                    <td><?php echo $a['a_id'] ?></td>
                    <td>
                      <a href="admin_edit.php?id=<?php echo $a['a_id'] ?>" class="btn btn-primary">edit</a>
                      <a href="admin_delete.php?id=<?php echo $a['a_id'] ?>" class="btn btn-danger">delete</a>
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

<?php include "footer.php" ?>