<?php

$page_title = "CRUD-Products";
//base url for pagination links
$page_url = "index.php?";

include_once 'config/pagination.php';
include_once 'config/dboperations.php';
include_once "layout/header.php";

$total_rows = $product->countAll();

$stmt = $product->getPageItems($from_record_num, $records_per_page);
include_once "read_template.php";

// $num = $stmt->rowCount();//how many items per page
// echo "displaying by ".$num." item per page";




// include_once('indexnosearch.php');

// set page footer
include_once "layout/footer.php";
?>	