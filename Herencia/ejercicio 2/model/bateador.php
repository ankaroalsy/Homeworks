<?php
    require_once('jugador.php');

    class Bateador extends Jugador {

        public function batear() {
            echo $this->get_nombre() . " Ha salido a batear.<br>";
        }
    }
?>