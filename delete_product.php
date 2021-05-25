<?php
// check if value was posted
if($_POST){
 
    include_once("config/dboperations.php");
     
    // set product id to be deleted
    $product->id = $_POST['object_id'];
     
    // delete the product
    if($product->delete()){
        echo "Object was deleted.";
    }
     
    // if unable to delete the product
    else{
        echo "Unable to delete object.";
    }
}
?>