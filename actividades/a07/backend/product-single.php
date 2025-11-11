<?php
    use TECWEB\MYAPI\Products;
    require_once __DIR__.'/myapi/Products.php';

    if (isset($_POST['id'])) {
        $products = new Products('marketzone');
        $products->single($_POST['id']);
        echo $products->getData();
    }
?>