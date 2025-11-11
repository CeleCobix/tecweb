<?php
    use TECWEB\MYAPI\Products;
    require_once __DIR__.'/myapi/Products.php';

    if (isset($_POST['id'])) {
        $jsonOBJ = json_decode(json_encode($_POST));

        $products = new Products('marketzone');
        $products->edit($jsonOBJ);
        echo $products->getData();
    }
?>