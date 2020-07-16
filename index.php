<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(); 
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Shop</title>
        <meta name="description" content="Shop">
        <meta name="author" content="Arden University">
    </head>
    <body>
        <h1>Shop</h1>

        <div>
            <h2>Opening times</h2>

            <?php 

            $controller = new Arden\Controllers\ShopController();

            $openingTimesView = new Arden\Views\OpeningTimesView($controller->getModelData());

            echo $openingTimesView->render();
            ?>
        <div>
            <h2>Top Products</h2>
            <?php
                $productsView = new Arden\Views\ProductsView($controller->getProductsData());
                echo $productsView->render();
            ?>
        </div>
    </body>
</html>
