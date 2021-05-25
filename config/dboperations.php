<?php
	// include database and object files
	include_once 'config/database.php';
	include_once 'objects/product.php';
	include_once 'objects/category.php';
	 
	// get database connection
	$db = new Database();
	$conn = $db->connectdb();
	 
	// prepare objects
	$product = new Product($conn);
	$category = new Category($conn);	
?>