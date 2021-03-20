    <?php

    include "dbcon.php";
    $d = "SELECT * from services";
    $a = mysqli_query($con,$d);
    $s = mysqli_fetch_array($a);
    ?>




    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Services</h3>
                <p></p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box btn-hover-lt">
						<div class="ser-icon">
							<i class="flaticon-seo"></i>
						</div>
						<h2>Web Development</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box btn-hover-lt">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>Responsive Design</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box btn-hover-lt">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>Creative Design</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box btn-hover-lt">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>Support</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box btn-hover-lt">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>Web Idea</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box btn-hover-lt">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>Graphic Design</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->