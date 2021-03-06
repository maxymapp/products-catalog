<?php
echo "<div class='right-button-margin'>";
    echo "<a href='create_product.php' class='btn btn-default pull-right'>Create Product</a>";
echo "</div>";
// display the products if there are any
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Product</th>";
            echo "<th>Price</th>";
            echo "<th>Description</th>";
            echo "<th>Category</th>";
            echo "<th>Actions</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
 
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td>{$price}</td>";
                echo "<td>{$description}</td>";
                echo "<td>";
                    $category->id = $category_id;
                    $category->readName();
                    echo $category->name;
                echo "</td>";
 
                echo "<td>";
                    // read product button
					echo "<a href='read_one.php?id={$id}' class='btn btn-primary left-margin'>";
					    echo "<span class='glyphicon glyphicon-list'></span> Read";
					echo "</a>";
					 
					// edit product button
					echo "<a href='update_product.php?id={$id}' class='btn btn-info left-margin'>";
					    echo "<span class='glyphicon glyphicon-edit'></span> Edit";
					echo "</a>";
					 
					// delete product button
					echo "<a delete-id='{$id}' class='btn btn-danger delete-object'>";
					    echo "<span class='glyphicon glyphicon-remove'></span> Delete";
					echo "</a>";
                echo "</td>";
 
            echo "</tr>";
 
        }
 
    echo "</table>";
 
    
	 
	
	 
	// paging buttons here
	include_once 'pagingsearch.php';
}

// tell the user there are no products
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}

?>