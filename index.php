<?php
include_once ('../apimatrixgym/Controller/Api/apiProducts.php');

$api = new ApiProducts();
$api->getAll();

?>