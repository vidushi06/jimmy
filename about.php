<?php
    include "dbcon.php";
        $data = "SELECT * from admin";
        $res = mysqli_query($con,$data);
        $a = mysqli_fetch_array($res);


?>




    <div id="about" class="section wb">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="right-box-pro">
                        <img src="admin/<?php echo $a['image'] ?>" alt="" class="img-fluid img-rounded">
						<div class="card-back"></div>
						<div class="card-front"></div>						
                    </div><!-- end media -->
                </div><!-- end col -->
				<div class="col-md-6">
                    <div class="message-box">                        
                        <h2>About <?php echo $a['name'] ?></h2>
                        <p> <?php echo $a['description']  ?></p>

                        <a href="#" class="sim-btn btn-hover-lt"><span class="btn-text">Download CV</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->