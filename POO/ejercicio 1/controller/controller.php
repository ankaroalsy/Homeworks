<?php
    include("../model/classes.php");
    $shop = new Shop();

    if (isset($_POST['getShops'])) {
        echo json_encode($shop->getShopList());
    } 

    if (isset($_POST['send'])) {
        $shopsCount = $shop->getShopCount();
        $products   = 3;
        $p = new Product;
        $p1 = array();
        $p2 = array();
        $p3 = array();
        for ($i = 0; $i < $shopsCount; $i++) { 
            for ($j = 0; $j < $products; $j++) { 
                $id = "t" . $i . "p" . $j;
                switch ($j) {
                    case 0:
                        array_push($p1,$_POST[$id]);
                        break;
                    case 1:
                        array_push($p2,$_POST[$id]);
                        break;
                    case 2:
                        array_push($p3,$_POST[$id]);
                        break;       
                    default:
                    
                        break;
                }
            }
        }
        $p1 = $p->getPromCost($p1);
        $p2 = $p->getPromCost($p2);
        $p3 = $p->getPromCost($p3);
        $p->setProductList([$p1,$p2,$p3]);
        $most = $p->getMostExpensiveProduct();
        $less = $p->getLessExpensiveProduct();
        echo "<center><b>Producto mas caro: </b>Producto " . $most['position'] . " <b>precio: </b>$" . $most['cost'] . "<br></center>";
        echo "<center><b>Producto mas barato: </b>Producto " . $less['position'] . " <b>precio: </b>$" . $less['cost'] . "<br></center>";
        echo "<center><h1>Promedios: </h1>
            <b>Producto 1:</b> $" . $p1 . "<br>
            <b>Producto 2:</b> $" . $p2 . "<br>
            <b>Producto 3:</b> $" . $p3 . "
            </center>";
    }
?>