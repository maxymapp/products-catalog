<?php
//defaults to 1st page unless set otherwise 
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$records_per_page = 5;
$from_record_num = ($records_per_page * $page) - $records_per_page;

?>