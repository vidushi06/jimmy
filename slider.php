	<?php

		include "dbcon.php";
		$data= "SELECT * FROM slider";
		$result = mysqli_query($con,$data);
		$a = mysqli_fetch_array($result);

	?>


	<div id="content">
		<div id="slider">
		  <img src="admin/<?php echo $a['image1']?>" alt="Web Developer" data-url="#1">
		  <img src="admin/<?php echo $a['image2']?>" alt="Graphic Design" data-url="#2">
		  <img src="admin/<?php echo $a['image3']?>" alt="Creative Design" data-url="#3">
		  <img src="admin/<?php echo $a['image4']?>" alt="Web Design" data-url="#4">
		</div>
	</div>