<?php 
	include 'header.php';
	$product_id=$_GET['id'];
	$user_id=$_SESSION['id'];
	$sql="delete from cart where user_id='$user_id' AND product_id='$product_id' ";
	if(mysqli_query($conn,$sql))
	{
		?>
		<script >
			alert("Product Added To Cart");
		</script>
		<?php
		header('location:cart.php');
	}
	else 
	{
		
			echo "Error Adding Data".mysqli_error($conn);
	}
 ?>