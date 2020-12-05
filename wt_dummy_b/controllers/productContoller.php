<?php
	require_once '../models/db_connect.php';
	
	$name="";
	$err_name="";
	$catagory="";
	$err_catagory="";
	$price="";
	$err_price="";
	$quantity="";
	$err_quantity="";
	$description="";
	$err_description="";
	$image="";
	$err_image="";
	$allSet= true;
	
	if(isset($_POST["addProduct"]))
	{
		// name validation
		if(empty($_POST["name"]))
		{
			$err_name = "*required name";
			$allSet= false;
		}
		else{ $name = htmlspecialchars($_POST["name"]);}
		
		// price validate
		
		if(empty($_POST["price"]))
		{
			$err_price = "*required price";
			$allSet= false;
		}
		else if(!is_numeric($_POST["price"]))
		{
			$err_price = "*required numeric charecter";
			$allSet= false;
		}
		else{ $price = htmlspecialchars($_POST["price"]);}
		
		// quantity validate
		
		if(empty($_POST["quantity"]))
		{
			$err_quantity = "*required quantity";
			$allSet= false;
		}
		else if(!is_numeric($_POST["quantity"]))
		{
			$err_quantity = "*required numeric charecter";
			$allSet= false;
		}
		else{ $quantity = htmlspecialchars($_POST["quantity"]);}
		
		// catagory validate
		
		if(isset($_POST["catagory"]))
		{
			$catagory = $_POST["catagory"];
		}
		else{$err_catagory = "*catagory required";$allSet= false;}
		
		// description validation
		if(empty($_POST["description"]))
		{
			$err_description = "*required description";
			$allSet= false;
		}
		else{ $description = htmlspecialchars($_POST["description"]);}
		
		// image validate
		
		if(isset($_POST["image"]))
		{
			$image = $_POST["image"];
		}
		else{$err_image = "*image required";}
		
		if($allSet)
		{
			$fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
			$target_file = "../storage/product_pic/" .uniqid().".$fileType";
			move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
			
			/*$fileType= strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
			$file= "../storage/product_pic/".uniqid().".$fileType";
			move_uploaded_file($_FILES["image"]["temp_name"],$file);*/
			addProduct($name, $catagory, $price, $quantity, $description, $target_file);
			
		}
		else{echo "allset false";}
		
	}
	function addProduct($name, $catagory, $price, $quantity, $description, $image)
	{
		$query="insert into products values ('null','$name','$price','$quantity','$description','$image','$catagory')";
		execute($query);
	}
	
	function getAllProduct()
	{
		$query="SELECT products.*, catagories.name as cname FROM products
		INNER JOIN catagories ON products.catagory_id=catagories.id";
		$result=get($query);
		return $result;
	}
	function getProduct($id)
	{
		$query="select * from products where id='$id'";
		$result=get($query);
		return $result;
	}
	

?>