<?php
include_once 'database.php';
class Producto extends Database {
    function getProducts() {
        $query = $this->conect()->query('SELECT * FROM Products');
        return $query;
    }
}
?>
