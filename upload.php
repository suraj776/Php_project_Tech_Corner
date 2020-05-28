<?php
	include 'backend-header.php';
?>
<div class="container-fluid col-sm-12 form-back">
	<form class="form-horizontal" method="post" enctype="multipart/form-data" style="margin-top:20px;">
		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Enter Product Name</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="text" class="form-control" name="product_name">
   	 		</div>
  		</div>
  		
  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Enter Price</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="text" class="form-control" name="price">
   	 		</div>
  		</div>
  		
  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Select Product Type</h3></div>
   	 		<div class="col-sm-7">
   	 			<select class="form-control" name="type">
			        <option>graphiccard</option>
			        <option>processor</option>
			        <option>motherboard</option>
			        <option>laptop</option>
			        <option>accessories</option>
      			</select>  
   	 		</div>
  		</div>

  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Enter Product Description</h3></div>
   	 		<div class="col-sm-7">
   	 			<textarea  class="form-control txtarea" name="description"></textarea>
   	 		</div>
  		</div>

  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Enter Features</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="text" class="form-control" name="feature_1">
   	 		</div>
  		</div>

  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Enter Features</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="text" class="form-control" name="feature_2">
   	 		</div>
  		</div>

  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Enter Features</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="text" class="form-control" name="feature_3">
   	 		</div>
  		</div>

  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Enter Features</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="text" class="form-control" name="feature_4">
   	 		</div>
  		</div>

  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color:#ff4500 ;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Upload Pictures</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="file" class="form-control" name="image_1">
   	 		</div>
  		</div>

  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Upload Pictures</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="file" class="form-control" name="image_2">
   	 		</div>
  		</div>

  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color: #ff4500;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Upload Pictures</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="file" class="form-control" name="image_3">
   	 		</div>
  		</div>

  		<div class="form-group">
   	 		<div class="col-sm-3" style="background-color:#ff4500 ;border:1px solid #ff4500;color:#222;border-radius: 4px ;margin-left: 25px;"><h3>Upload Pictures</h3></div>
   	 		<div class="col-sm-7">
   	 			<input type="file" class="form-control" name="image_4">
   	 		</div>
  		</div>

  		<button type="submit" class="btn btn-info  btn-lg" style="background-color: #222;
  		border:2px solid #222; color:#ff4500;margin-left: 125px; " name="submit">Upload</button>

	</form>
</div>

<?php
	if(isset($_POST['submit']))
    {
        $product_name=$_POST['product_name'];
        $price=$_POST['price'];
        $type=$_POST['type'];
        $description=$_POST['description'];
        $feature_1=$_POST['feature_1'];
        $feature_2=$_POST['feature_2'];
        $feature_3=$_POST['feature_3'];
        $feature_4=$_POST['feature_4'];
        $target_path = "images/";  
        $target_path_1 = $target_path.basename( $_FILES['image_1']['name']);
        $target_path_2 = $target_path.basename( $_FILES['image_2']['name']);
        $target_path_3 = $target_path.basename( $_FILES['image_3']['name']);
        $target_path_4 = $target_path.basename( $_FILES['image_4']['name']);
        $image_1=$_FILES['image_1']['name'];
        $image_2=$_FILES['image_2']['name'];
        $image_3=$_FILES['image_3']['name'];
        $image_4=$_FILES['image_4']['name'];
        if(move_uploaded_file($_FILES['image_1']['tmp_name'], $target_path_1) && move_uploaded_file($_FILES['image_2']['tmp_name'], $target_path_2) &&move_uploaded_file($_FILES['image_3']['tmp_name'], $target_path_3) &&move_uploaded_file($_FILES['image_4']['tmp_name'], $target_path_4)) 
        {  
            mysqli_query($conn,"insert into products (product_name,price,description,type,feature_1,feature_2,feature_3,feature_4,image_1,image_2,image_3,image_4) values ('$product_name','$price','$description','$type','$feature_1','$feature_2','$feature_3','$feature_4','$image_1','$image_2','$image_3','$image_4')") or die(mysqli_error($conn));
            ?>
           <script>
                alert("Product Added");
           </script>
           <?php

        } 
        else
        {  
            echo "Sorry, file not uploaded, please try again!";  
        }
                                      
    }
?>



<?php
	include 'backend-footer.php';
?>