<?php
    require_once("../model/jDePosicion.php");
    require_once("../model/pitcher.php");
    require_once("../model/bateador.php");

    if (isset($_POST['agregar'])) {
        $tipo = $_POST['tipo'];
        if ($tipo == 'bateador') {
            $nuevo=new Bateador();
        }else if ($tipo == 'pitcher') {
            $nuevo=new Pitcher();
        }else {
            $nuevo=new JDePosicion(); 
        } 
        $nuevo->set_nombre($_POST['nombre']);
        $nuevo->set_nro_uniforme($_POST['nro_uniforme']);
        $nuevo->set_posicion($_POST['posicion']);

        if ($tipo == 'bateador') {
            $nuevo->batear();
        }else if ($tipo == 'pitcher') {
            $nuevo->defender();
            $nuevo->pichar();
        }else {
            $nuevo->defender();
            $nuevo->batear();
        }
    }
?>