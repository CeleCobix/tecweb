<?php
    use TECWEB\MYAPI\Products;
    require_once __DIR__.'/myapi/Products.php';

    if (isset($_GET['search'])) {
        $products = new Products('marketzone');
        $products->search($_GET['search']);
        echo $products->getData();
    }
?>