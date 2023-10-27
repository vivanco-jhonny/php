<?php
include_once 'products.php';
class ApiProducts {
    function getAll() {
        $product = new Producto();
        $products = array();
        $products["items"] = array();
        $res = $product->getProducts();

        if($res -> rowCount()) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $item = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'price' => $row['price'],
                    'image' => $row['image']
                );
                array_push($products['items'], $item);
            }
            echo json_encode($products);
        }
        else {
            echo json_encode(array('mensaje' => 'no hay elementos'));
        }
    }
}
?>
