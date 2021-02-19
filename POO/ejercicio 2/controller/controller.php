<?php
    require_once("../model/order.php");

    if (isset($_POST['create'])) {
        $order = new Order();
        $order->setTxId(1);
        $order->setBuyerEmail($_POST['email']);
        $order->setAmount($_POST['price']);
        $order->setUsername($_POST['username']);
        $order->setStatus('Pending...');
        $order->createOrder();
    }else {
        header("location:../");
    }
?>