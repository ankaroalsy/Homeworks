<?php
/*
JOSE DEMARZO CI 28286982 EJERCICIO 1:
Codificar un programa Orientado a objeto donde pida al usuario el precio de tres productos en tres
establecimientos distintos denominados “Tienda 1”, “Tienda 2” y “Tienda 3”. Una vez se introduzca
esta información se debe calcular y mostrar el precio promedio del producto, el producto más caro y el
producto más barato.
*/
    class Shop {
        private $shopList;
        public function __construct () {
            $shopList = $this->setShopList(["Tienda 1","Tienda 2","Tienda 3"]);
        }

        public function setShopList($data) {
            $this->shopList = $data;
        }
        public function getShopList() {
            return $this->shopList;
        }
        public function getShopCount() {
            return count($this->shopList);
        }
    }
    class Product {
        private $productList;
        public function setProductList($data) {
            $this->productList = $data;
        }
        public function getProductList() {
            return $this->productList;
        }
        public function getPromCost($priceList) {
            $c = count($priceList);
            $acum = 0;
            for ($i = 0; $i < $c; $i++) { 
                $acum += $priceList[$i];
            }
            $prom = $acum/$c;
            return $prom;
        }
        public function getMostExpensiveProduct(){
            $m = array("cost"=>0,"position"=>0);
            $l = $this->getProductList();
            for ($i=0; $i < count($l); $i++) { 
                if ($l[$i] > $m['cost']) {
                    $m = array("cost"=>$l[$i],"position"=>$i + 1);
                }
            }
            return $m;
        }
        public function getLessExpensiveProduct(){
            $m = array("cost"=>99999999999999999999999,"position"=>0);
            $l = $this->getProductList();
            for ($i=0; $i < count($l); $i++) { 
                if ($l[$i] < $m['cost']) {
                    $m = array("cost"=>$l[$i],"position"=>$i + 1);
                }
            }
            return $m;
        }
    }
?>