<?php
	include 'header.php';
	$product_id=$_GET['id'];
?>

<div style=" margin-top: 85px;" class="container-fluid category-slider">
	<div class="container-fluid category-slider-header">
		<h2 style="margin-left: 10px;">Best Selling</h2>
	</div>
	<div class="col-sm-3 collage-image w3-content w3-section" style="max-width:100%;height: ;">


	<?php
		$sql="select * from products where type='$product_id';";
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
			<img class="mySlides1 w3-animate-right" src="images/<?php echo $row["image_1"] ?>" style="width: 550px;margin-left: 400px;">  			
			<?php
		}
	?>


	</div>

</div>
<br>
<div class="container-fluid category-content col-sm-12" style="height:;">
	<div class="container-fluid col-sm-12 category-content-header">
		<h3 style="margin-left: 10px;">Popular</h3>
	</div>
	
	<div class="container-fluid col-sm-12 category-content-outer" style="height:;">
		<!-- Content Box Start -->



	<?php
		$sql="select * from products where type='$product_id';";
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





		<div class="container-fluid col-sm-6 content-box">
			<div class="col-sm-12 container-fluid" style="height:50%">
				<div class="col-sm-6">
					<img src="images/<?php echo $row["image_1"] ?>" class="img-fluid category-img" alt="Responsive image">
				</div>
				<div class="col-sm-5">
					<h3><?php echo $row["product_name"] ?></h3>
					<h3><?php echo $row["price"] ?></h3>
					<button class="btn btn-primary btn-lg btn-block"style="height:45px;background-color: #222;color:#ff4500"><a href="product.php?id=<?php echo $row["product_id"] ?>">View</a></button>
				</div>
				<div class="col-sm-12" style="background-color: ;height: 100%">
					<div class="col-sm-12" style="background-color: ;height: 100px">
						<p><?php echo $row["description"] ?></p>	
					</div>
					<div class="col-sm-12" style="background-color: ;height: 100px;margin-top: 40px;">
							<div class="col-sm-6" style="background-color: ;height: 100px">
								<h4><?php echo $row["feature_1"] ?></h4>
								<h4><?php echo $row["feature_2"] ?></h4>
							</div>
							<div class="col-sm-6" style="background-color: ;height: 100px">
								<h4><?php echo $row["feature_3"] ?></h4>
								<h4><?php echo $row["feature_4"] ?></h4>
							</div>
					</div>
				</div>
			</div>
		</div>
		


			<?php
		}
	?>

		<!-- Content Box End -->




	</div>
	
</div>
<script>
    var myIndex = 0;
    carousel1();
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
	
</script>
</body>
</html>
<?php 
	// include 'footer.php';
?>