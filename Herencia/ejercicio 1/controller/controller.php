<?php
    require_once('../model/auto.php');
    require_once('../model/vagoneta.php');
    require_once('../model/camioneta.php');

    if (isset($_POST['save'])) {
        $type = htmlentities(addslashes($_POST['type']), ENT_QUOTES);
        $new  = (($type == 'auto')? new Auto() : ($type == 'vagoneta'))? new Vagoneta() : new Camioneta();
        $new->set_nro_serie_motor(htmlentities(addslashes($_POST['nro_serie_motor']), ENT_QUOTES));
        $new->set_marca(htmlentities(addslashes($_POST['marca']), ENT_QUOTES));
        $new->set_placa(htmlentities(addslashes($_POST['placa']), ENT_QUOTES));
        $new->set_color(htmlentities(addslashes($_POST['color']), ENT_QUOTES));
        $new->set_anio(htmlentities(addslashes($_POST['anio']), ENT_QUOTES));
        $new->set_precio(htmlentities(addslashes($_POST['precio']), ENT_QUOTES));
        if ($type == 'auto') {
            $new->set_cant_pasajeros(htmlentities(addslashes($_POST['cant_pasajeros1']), ENT_QUOTES));
            $new->mostrar_auto();
        }else if ($type == 'vagoneta') {
            $new->set_cant_pasajeros(htmlentities(addslashes($_POST['cant_pasajeros']), ENT_QUOTES));
            $new->mostrar_vagoneta();
        }else {
            $new->set_cant_kgs(htmlentities(addslashes($_POST['cant_kgs']), ENT_QUOTES));
            $new->set_ejes(htmlentities(addslashes($_POST['ejes']), ENT_QUOTES));
            $new->set_rodadas(htmlentities(addslashes($_POST['rodadas']), ENT_QUOTES));
            $new->mostrar_camioneta();
        }
    }
?>