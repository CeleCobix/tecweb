<?php
    use TECWEB\MYAPI\Products;
    require_once __DIR__.'/myapi/Products.php';

    if (isset($_POST['nombre'])) {
        $jsonOBJ = json_decode(json_encode($_POST));
        
        $products = new Products('marketzone');
        $products->add($jsonOBJ);
        echo $products->getData();
    }
?>