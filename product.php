<?php
	include 'header.php';
	$pid=$_GET['id'];
	$uid=$_SESSION['id'];
?>
<?php
		$sql="select * from products where product_id='$pid';";
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


	<div class="col-sm-12 container-fluid product-slider-header">
		<h2 style="    margin-top: 15px;margin-left: 20px;">Product Gallery</h2>
	</div>

	<div class="col-sm-12 container-fluid product-slider">
		<div class="container-fluid col-sm-10 big-image">
			<img class="mySlides1 w3-animate-right" src="images/<?php echo $row["image_1"] ?>" style="width: 500px;margin-top: 10px;margin-left: 350px;">
			<img class="mySlides1 w3-animate-right" src="images/<?php echo $row["image_2"] ?>" style="width: 500px;margin-top: 10px;margin-left: 350px;">
			<img class="mySlides1 w3-animate-right" src="images/<?php echo $row["image_3"] ?>" style="width: 500px;margin-top: 10px;margin-left: 350px;">
			<img class="mySlides1 w3-animate-right" src="images/<?php echo $row["image_4"] ?>" style="width: 500px;margin-top: 10px;margin-left: 350px;">
		</div>
		<div class="container-fluid col-sm-2 small-image">
			<img class="img-responsive" src="images/<?php echo $row["image_1"] ?>" style="width: 50%;">
			<img class="img-responsive" src="images/<?php echo $row["image_2"] ?>" style="width: 50%;">
			<img class="img-responsive" src="images/<?php echo $row["image_3"] ?>" style="width: 50%;">
			<img class="img-responsive" src="images/<?php echo $row["image_4"] ?>" style="width: 50%;">
		</div>
	</div>


	<div class="col-sm-12 container-fluid product-slider-header" style="margin-top: 25px;">
		<h2 style="    margin-top: 15px;margin-left: 20px;">Product Detail</h2>
	</div>

	<div class="col-sm-12 container-fluid product-about">
		<div class="col-sm-6 container-fluid left-detail">
			<h2 style="margin-left: 15px;"><b>Product Description</b></h2>
			<h3 style="margin-left: 35px;margin-top: 50px;"> <?php echo $row["product_name"] ?></h3>
			<p style="margin-right: 40px; height: 300px;margin-left: 35px;"> <?php echo $row["description"] ?></p>
			<div class="col-sm-12 container-fluid" style="height: 100px;" >
				<div class="col-sm-6 container-fluid" style="height: 100px;" >
					<h3 style="margin-left: 35px;margin-top: 33px;">₹<?php echo $row["price"] ?></h3>
				</div>
				<div class="col-sm-6 container-fluid" style="height: 100px;" >
					<button class="btn btn-primary btn-lg btn-block"style="height:45px;background-color: #222;color:#ff4500;margin-top: 25px;" ><a href="addcart.php?id=<?php echo $row["product_id"] ?>">Add To Cart</a></button>
				</div>
			</div>
		</div>
		<div class="col-sm-6 container-fluid left-detail">
			<h2 style="margin-left: 15px;"><b>Product Features</b></h2>
			<ul>
				<br>
				<li><h3><?php echo $row["feature_1"] ?></h3></li>
				<br>
				<li><h3><?php echo $row["feature_2"] ?></h3></li>
				<br>
				<li><h3><?php echo $row["feature_3"] ?></h3></li>
				<br>
				<li><h3><?php echo $row["feature_4"] ?></h3></li>
			</ul>
		</div>
	</div>


		<?php
		}
	?>

<div class="col-sm-12 container-fluid product-slider-header" style="margin-top: 25px;">
	<h2 style="    margin-top: 15px;margin-left: 20px;">Product Review</h2>
</div>
<div class="col-sm-12 container-fluid product-about">
	<div class="col-sm-6 container-fluid left-detail" >

	<?php
	$sql="select * from review where product_id='$pid';";
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



		<div class="col-sm-12 container-fluid review">
			<h3 style="margin-left: 35px;"> Anonymous User Says:</h3>
			<p style="margin-left: 35px;"><?php echo $row["review"] ?></p>
			<h4 style="margin-left: 35px;"><?php echo $row["rating"] ?> / 5</h4>
		</div>

			<?php
		}
	?>





	</div>
	<div class="col-sm-6 container-fluid left-detail" style="background-color: ;">
		<form method="post" enctype="multipart/form-data">
			<h2 style="margin-left: 65px;"><b>Own This Product ?</b></h2>
			<h2 style="margin-left: 65px;">Tell Others About It !!</h3>
			<div class="form-group">
   	 			<div class="col-sm-10 col-sm-offset-1"><h3>Write A Review</h3></div>
   	 			<div class="col-sm-10 col-sm-offset-1">
   	 				<textarea  class="form-control txtarea" name="review" style="height:200px;border :2px solid #ff4500;"></textarea>
   	 			</div>
  			</div>

  			<div class="form-group" >
   	 			<div class="col-sm-10 col-sm-offset-1"><h3>Your Rating</h3></div>
   	 			<div class="col-sm-10 col-sm-offset-1">
	   	 			<select class="form-control" name="rating" style="border :2px solid #ff4500;">
				        <option>
				        	1
				        </option>
				        <option>
				        	2
				        </option>
				        <option>
				        	3
				        </option>
				        <option>
				        	4
				    	</option>
				        <option>
				        	5
				    	</option>
	      			</select>  
   	 			</div>
  			</div>
  			<br>
  			<div class="form-group">
   	 			<div class="col-sm-10 col-sm-offset-1">
   	 				<button type="submit" class="btn btn-info  btn-lg" style="background-color: #222;border:2px solid #ff4500; color:#ff4500;margin-top: 30px;"    name="rate">
  						Rate
  					</button>
   	 			</div>
  			</div>
  			
		</form>
	
	</div>

</div>

<?php
	if(isset($_POST['rate']))
	{
		$review=$_POST['review'];
        $rating=$_POST['rating'];
        $sql2="insert into review values('$uid','$pid','$review','$rating')";
		if(mysqli_query($conn,$sql2))
		{
		 	?>
			<script>
				alert("Thank You For Your Review !!");
			</script>
			<?php
		}
		else 
		{
			
				echo "Error Adding Data".mysqli_error($conn);
		}
	}
?>
	






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

<?php 
	include 'footer.php';
?>