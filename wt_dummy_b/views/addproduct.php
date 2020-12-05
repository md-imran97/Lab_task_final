<?php 
	include 'admin_header.php';
	require_once '../controllers/productContoller.php';
	require_once '../controllers/catagoryController.php';
	$allCatagory=getAllCatagory();

?>
<!--addproduct starts -->
<div class="center">
	<form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" class="form-control" name="name" value="<?php echo $name; ?>"><br>
			<span style="color:red"><?php echo $err_name; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Category:</h4> 
			<select class="form-control" name="catagory" value="<?php echo $catagory; ?>">
				<option value='' disabled selected>Choose</option>
				<?php
					foreach($allCatagory as $c)
					{
						echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
					}
				?>
			</select><br>
			<span style="color:red"><?php echo $err_catagory; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" class="form-control" name="price" value="<?php echo $price; ?>"><br>
			<span style="color:red"><?php echo $err_price; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Quantity:</h4> 
			<input type="text" class="form-control" name="quantity" value="<?php echo $quantity; ?>"><br>
			<span style="color:red"><?php echo $err_quantity; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" class="form-control" name="description" value="<?php echo $description; ?>"></textarea><br>
			<span style="color:red"><?php echo $err_description; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input type="file" class="form-control" name="image" value="<?php echo $image; ?>"><br>
			<span style="color:red"><?php echo $err_image; ?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="Add Product" class="form-control" name="addProduct">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
