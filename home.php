<?php
	include 'header.php';
?>
<div>
	<div class="container-fluid collage">
		<div class=" container-fluid collage-header">
			<h2 style="margin-left: 20px;">Trending . . .</h2>
		</div><br>
		<div class="col-sm-2  collage-image w3-content w3-section" style="max-width:500px;margin-top: 175px;height: 350px">
			
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/1_product_1.png" style="margin-top: 150px;">
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/2_product_1.png" style="margin-top: 150px;">
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/3_product_1.png" style="margin-top: 150px;">
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/5_product_1.jpg" style="margin-top: 150px;">
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/7_product_1.jpg" style="margin-top: 150px;">
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/9_product_2.png" style="margin-top: 150px;">
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/11_product_1.png" style="margin-top: 150px;">
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/15_product_2.jpg" style="margin-top: 150px;">
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/16_product_3.jpg" style="margin-top: 150px;">
			<img class="mySlides1 w3-animate-right img-responsive center" src="images/17_product_1.jpg" style="margin-top: 150px;">
		

		</div>
		<div class="col-sm-8 collage-image w3-content w3-section" style="">
			
			<img class="mySlides2 w3-animate-right img-responsive center" src="images/2_product_1.png" style="margin-left: 250px;height:400px;">
  			<img class="mySlides2 w3-animate-right img-responsive center" src="images/3_product_1.png" style="margin-left: 250px;height:400px;">
  			<img class="mySlides2 w3-animate-right img-responsive center" src="images/5_product_1.jpg" style="margin-left: 250px;height:400px;">
  			<img class="mySlides2 w3-animate-right img-responsive center" src="images/7_product_1.jpg" style="margin-left: 250px;height:400px;">
  			<img class="mySlides2 w3-animate-right img-responsive center" src="images/9_product_2.png" style="margin-left: 250px;height:400px;">
  			<img class="mySlides2 w3-animate-right img-responsive center" src="images/11_product_1.png" style="margin-left: 250px;height:400px;">
  			<img class="mySlides2 w3-animate-right img-responsive center" src="images/15_product_2.jpg" style="margin-left: 250px;height:400px;">
  			<img class="mySlides2 w3-animate-right img-responsive center" src="images/16_product_3.jpg" style="margin-left: 250px;height:400px;">
  			<img class="mySlides2 w3-animate-right img-responsive center" src="images/17_product_1.jpg" style="margin-left: 250px;height:400px;">
  			<img class="mySlides2 w3-animate-right img-responsive center" src="images/1_product_1.png" style="margin-left: 250px;height:400px;">
		
		</div>
		<div class="col-sm-2  collage-image w3-content w3-section" style="max-width:500px;margin-top: 175px;height: 350px">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/17_product_1.jpg" style="margin-top: 150px;">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/1_product_1.png" style="margin-top: 150px;">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/2_product_1.png" style="margin-top: 150px;">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/3_product_1.png" style="margin-top: 150px;">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/5_product_1.jpg" style="margin-top: 150px;">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/7_product_1.jpg" style="margin-top: 150px;">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/9_product_2.png" style="margin-top: 150px;">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/11_product_1.png" style="margin-top: 150px;">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/15_product_2.jpg" style="margin-top: 150px;">
			<img class="mySlides3 w3-animate-right img-responsive center" src="images/16_product_3.jpg" style="margin-top: 150px;">
			


		</div>
	</div><br>

	<div class ="col-sm-12 before-image" style="background: url('images/1_display.jpg') no-repeat center center ; background-size: cover;">
	</div>

	<div class="col-sm-12 product-demo container-fluid">
		<div class=" container-fluid collage-header">
			<h2 style="margin-left: 20px;">Graphic Cards <button type="button" class="btn btn-default category-redirect-btn btn-lg" style="background-color: transparent;margin-top: -2px;"><a href="category.php?id=<?php echo "graphiccard" ?>">More</a></button></h2>

		</div><br>

		<div class=" container-fluid product-demo-content-outer">
		<?php
			$sql="select * from products where type='graphiccard' LIMIT 4;";
			if(mysqli_query($conn,$sql))
			{
				echo "";
			}
			else 
			{
				
					echo "Error Adding Data".mysqli_error($conn);
			}
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>

				<div class="container-fluid col-sm-3 product-demo-content" >
					
					<div class="container-fluid col-sm-12 " style="height: 200px;">
						<img src="images/<?php echo $row["image_1"] ?>" class="img-fluid content-image" alt="Responsive image">
					</div>
					<div class="col-sm-12 container-fluid" ><h3 style="margin-left: 10px"><?php echo $row["product_name"] ?></h3>
					</div>
					<div class="col-sm-6 container-fluid" ><h4 style="margin-left: 15px">₹ <?php echo $row["price"] ?></h4>
					</div>
					<div class="col-sm-6"><button class="btn btn-primary btn-lg btn-block"style="height:45px;background-color: #222;color:#ff4500"><a href="product.php?id=<?php echo $row["product_id"] ?>">View</a></button>
					</div>
					<div class="col-sm-12"><h4><?php echo $row["feature_1"] ?>|<?php echo $row["feature_2"] ?></h4>
					</div>

				</div>
				<?php
			}
		?>
		</div>		
	</div>

	<div class ="col-sm-12 before-image" style="background: url('images/2_display.jpg') no-repeat center center ; background-size: cover;margin-top: 30px;">

	</div>

	<div class="col-sm-12 product-demo container-fluid">
		<div class=" container-fluid collage-header">
			<h2 style="margin-left: 20px;">Processors <button type="button" class="btn btn-default category-redirect-btn btn-lg" style="background-color: transparent;margin-top: -2px;"><a href="category.php?id=<?php echo "processor" ?>">More</a></button></h2>

		</div><br>

		<div class=" container-fluid product-demo-content-outer">
		<?php
			$sql="select * from products where type='processor' LIMIT 4;";
			if(mysqli_query($conn,$sql))
			{
				echo "";
			}
			else 
			{
				
					echo "Error Adding Data".mysqli_error($conn);
			}
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>

				<div class="container-fluid col-sm-3 product-demo-content" >
					
					<div class="container-fluid col-sm-12 " style="height: 200px;">
						<img src="images/<?php echo $row["image_1"] ?>" class="img-fluid content-image" alt="Responsive image">
					</div>
					<div class="col-sm-12 container-fluid" ><h3 style="margin-left: 10px"><?php echo $row["product_name"] ?></h3>
					</div>
					<div class="col-sm-6 container-fluid" ><h4 style="margin-left: 15px">₹ <?php echo $row["price"] ?></h4>
					</div>
					<div class="col-sm-6"><button class="btn btn-primary btn-lg btn-block"style="height:45px;background-color: #222;color:#ff4500"><a href="product.php?id=<?php echo $row["product_id"] ?>">View</a></button>
					</div>
					<div class="col-sm-12"><h4><?php echo $row["feature_1"] ?>|<?php echo $row["feature_2"] ?></h4>
					</div>

				</div>
				<?php
			}
		?>
		</div>		
	</div>


	<div class ="col-sm-12 before-image" style="background: url('images/3_display.jpg') no-repeat center center ; background-size: cover;margin-top: 30px;">

	</div>

	<div class="col-sm-12 product-demo container-fluid">
		<div class=" container-fluid collage-header">
			<h2 style="margin-left: 20px;">Motherboards <button type="button" class="btn btn-default category-redirect-btn btn-lg" style="background-color: transparent;margin-top: -2px;"><a href="category.php?id=<?php echo "motherboard" ?>">More</a></button></h2>

		</div><br>

		<div class=" container-fluid product-demo-content-outer">
		<?php
			$sql="select * from products where type='motherboard' LIMIT 4;";
			if(mysqli_query($conn,$sql))
			{
				echo "";
			}
			else 
			{
				
					echo "Error Adding Data".mysqli_error($conn);
			}
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>

				<div class="container-fluid col-sm-3 product-demo-content" >
					
					<div class="container-fluid col-sm-12 " style="height: 200px;">
						<img src="images/<?php echo $row["image_1"] ?>" class="img-fluid content-image" alt="Responsive image">
					</div>
					<div class="col-sm-12 container-fluid" ><h3 style="margin-left: 10px"><?php echo $row["product_name"] ?></h3>
					</div>
					<div class="col-sm-6 container-fluid" ><h4 style="margin-left: 15px">₹ <?php echo $row["price"] ?></h4>
					</div>
					<div class="col-sm-6"><button class="btn btn-primary btn-lg btn-block"style="height:45px;background-color: #222;color:#ff4500"><a href="product.php?id=<?php echo $row["product_id"] ?>">View</a></button>
					</div>
					<div class="col-sm-12"><h4><?php echo $row["feature_1"] ?>|<?php echo $row["feature_2"] ?></h4>
					</div>

				</div>
				<?php
			}
		?>
		</div>		
	</div>


	<div class ="col-sm-12 before-image" style="background: url('images/4_display.jpg') no-repeat center center ; background-size: cover;margin-top: 30px;">

	</div>

	<div class="col-sm-12 product-demo container-fluid">
		<div class=" container-fluid collage-header">
			<h2 style="margin-left: 20px;">Laptops <button type="button" class="btn btn-default category-redirect-btn btn-lg" style="background-color: transparent;margin-top: -2px;"><a href="category.php?id=<?php echo "laptop" ?>">More</a></button></h2>

		</div><br>

		<div class=" container-fluid product-demo-content-outer">
		<?php
			$sql="select * from products where type='laptop' LIMIT 4;";
			if(mysqli_query($conn,$sql))
			{
				echo "";
			}
			else 
			{
				
					echo "Error Adding Data".mysqli_error($conn);
			}
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>

				<div class="container-fluid col-sm-3 product-demo-content" >
					
					<div class="container-fluid col-sm-12 " style="height: 200px;">
						<img src="images/<?php echo $row["image_1"] ?>" class="img-fluid content-image" alt="Responsive image">
					</div>
					<div class="col-sm-12 container-fluid" ><h3 style="margin-left: 10px"><?php echo $row["product_name"] ?></h3>
					</div>
					<div class="col-sm-6 container-fluid" ><h4 style="margin-left: 15px">₹ <?php echo $row["price"] ?></h4>
					</div>
					<div class="col-sm-6"><button class="btn btn-primary btn-lg btn-block"style="height:45px;background-color: #222;color:#ff4500"><a href="product.php?id=<?php echo $row["product_id"] ?>">View</a></button>
					</div>
					<div class="col-sm-12"><h4><?php echo $row["feature_1"] ?>|<?php echo $row["feature_2"] ?></h4>
					</div>

				</div>
				<?php
			}
		?>
		</div>		
	</div>


	<div class ="col-sm-12 before-image" style="background: url('images/5_display.jpg') no-repeat center center ; background-size: cover;margin-top: 30px;">

	</div>

	<div class="col-sm-12 product-demo container-fluid">
		<div class=" container-fluid collage-header">
			<h2 style="margin-left: 20px;">Accessories <button type="button" class="btn btn-default category-redirect-btn btn-lg" style="background-color: transparent;margin-top: -2px;"><a href="category.php?id=<?php echo "accessories" ?>">More</a></button></h2>

		</div><br>

		<div class=" container-fluid product-demo-content-outer">
		<?php
			$sql="select * from products where type='accessories' LIMIT 4;";
			if(mysqli_query($conn,$sql))
			{
				echo "";
			}
			else 
			{
				
					echo "Error Adding Data".mysqli_error($conn);
			}
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>

				<div class="container-fluid col-sm-3 product-demo-content" >
					
					<div class="container-fluid col-sm-12 " style="height: 200px;">
						<img src="images/<?php echo $row["image_1"] ?>" class="img-fluid content-image" alt="Responsive image">
					</div>
					<div class="col-sm-12 container-fluid" ><h3 style="margin-left: 10px"><?php echo $row["product_name"] ?></h3>
					</div>
					<div class="col-sm-6 container-fluid" ><h4 style="margin-left: 15px">₹ <?php echo $row["price"] ?></h4>
					</div>
					<div class="col-sm-6"><button class="btn btn-primary btn-lg btn-block"style="height:45px;background-color: #222;color:#ff4500"><a href="product.php?id=<?php echo $row["product_id"] ?>">View</a></button>
					</div>
					<div class="col-sm-12"><h4><?php echo $row["feature_1"] ?>|<?php echo $row["feature_2"] ?></h4>
					</div>

				</div>
				<?php
			}
		?>
		</div>		
	</div>


</div>
<script>
    var myIndex = 0;
    carousel1();
    carousel2();
    carousel3();

	function carousel1() 
	{
	    var i;
	    var x = document.getElementsByClassName("mySlides1");
	    for (i = 0; i < x.length; i++) 
	    {
	      x[i].style.display = "none";  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].style.display = "block";  
	    setTimeout(carousel1, 2500);    
	}
	function carousel2() 
	{
	    var i;
	    var x = document.getElementsByClassName("mySlides2");
	    for (i = 0; i < x.length; i++) 
	    {
	      x[i].style.display = "none";  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].style.display = "block";  
	    setTimeout(carousel2, 2500);    
	}
	function carousel3() 
	{
	    var i;
	    var x = document.getElementsByClassName("mySlides3");
	    for (i = 0; i < x.length; i++) 
	    {
	      x[i].style.display = "none";  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].style.display = "block";  
	    setTimeout(carousel3, 2500);    
	}
</script>


<?php
	include 'footer.php';
?>