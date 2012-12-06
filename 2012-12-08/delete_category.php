<?php
	// Get category id
	$category_id = $_POST['category_id'];

	// remove product from the database
	require_once('database.php');
	$query = "DELETE FROM categories WHERE categoryID = '$category_id'";
	$db->exec($query);

	// display product list page
	include('category_list.php');
?>