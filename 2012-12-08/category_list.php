<?php
    require_once('database.php');

    // get all categories
    $query = 'SELECT * FROM categories ORDER BY categoryID';
    $categories = $db->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <div id="page">
    	<div id="header">
        	<h1>Product Manager</h1>
    	</div>

    	<div id="main">

    		<h1>Category List</h1>
    		<table>
        		<tr>
            		<th>Name</th>
            		<th>&nbsp;</th>
        		</tr>
    			<!-- add code for the rest of the table here -->
    			<?php foreach ($categories as $category) : ?>
        		<tr>
            		<td><?php echo $category['categoryName']; ?></td>
            		<td>
                		<form action="delete_category.php" method="post" id="deleteProductForm">
                    		<input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>"/>
                    		<input type="submit" value="Delete"/>
                		</form>
            		</td>
        		</tr>
        		<?php endforeach; ?>
    		</table>
    		<br />

    		<h2>Add Category</h2>
    
    		<!-- add code for the form here -->
    		<form action="add_category.php" method="post" id="addCategoryForm">
            	<label>Name:</label>
        		<input type="input" name="name" />
        		<input id="btnAddCategory" type="submit" value="Add"/>
    		</form>
    		<br />
    
    		<p><a href="index.php">List Products</a></p>

    	</div> <!-- end main -->

    	<div id="footer">
        	<p>
            	&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.
        	</p>
    	</div>
    </div><!-- end page -->
</body>
</html>