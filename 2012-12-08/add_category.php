<?php

	// get data
	$category_id = $_POST['category_id'];
	$name = $_POST['name'];

	// validate data
	if (empty($name))
	{
    	$error = "Category data is invalid! Check all fields and try again.";
    	include('error.php');
	}
	else
	{
		// If valid data was entered, add product to the database
    	require_once('database.php');
    	$query = "INSERT INTO categories (categoryName) VALUES ('$name')";
		$db->exec($query);

    	// display category list page
    	include('category_list.php');
	}
?>