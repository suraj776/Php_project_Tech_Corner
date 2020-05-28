<?php
	include 'header.php';
	$uid=$_SESSION['id'];
?>
<div class="col-sm-12" style="height:100px;">
</div>
<div class="col-sm-12 container-fluid cart-header">
	<h2 style="margin-left:25px;">Your Cart</h2>
</div>
<div class="col-sm-12" style="height:25px;">
</div>

<?php
		$sql="select products.product_id,products.product_name,products.price,products.image_1,cart.user_id,cart.product_id from products INNER JOIN cart ON products.product_id=cart.product_id WHERE cart.user_id='$uid'";
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

		<div class="col-sm-6 container-fluid cart-box">
			<div class="col-sm-6 container-fluid " style="height:400px;">
				<img src="images/<?php echo $row["image_1"] ?>" class="img-responsive" >
			</div>
			<div class="col-sm-6 container-fluid " style="height:400px;">
				<h2 style="margin-left: 17px;"><?php echo $row["product_name"] ?></h2>
				<h2 style="margin-left: 17px;">₹ <?php echo $row["price"] ?></h2>
				<div class="col-sm-8" style="margin-top: 50px">
					<button class="btn-primary btn-block"style="border: 1px solid #ff4500;height: 40px;border-radius: 8px;background-color: #222;color: #ff4500;font-size: 22px;" onclick="func1();">Buy
					</button>
					<button class="btn-primary btn-block removebtn"style="border: 1px solid #ff4500;height: 40px;border-radius: 8px;background-color: #ff4500;color: #222;font-size: 22px;" ><a style="color:#222;" href="deletecart.php?id=<?php echo $row["product_id"] ?>">Remove</a>
					</button>
				</div>
			</div>
			
		</div>

		<?php
		}
	?>
<script>
	function func1()
	{
		alert("Pay Up");
	}
</script>
<?php
	// select products.product_id,products.product_name,products.price,products.image_1,cart.user_id,cart.product_id from products INNER JOIN cart ON products.product_id=cart.product_id WHERE cart.user_id=$uid
?>


