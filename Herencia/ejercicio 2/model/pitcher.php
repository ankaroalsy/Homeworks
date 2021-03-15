<?php
    require_once('jugador.php');

    class Pitcher extends Jugador {
        public function defender() {
            echo $this->get_nombre() . " Ha salido a defender.<br>";
        }
        public function pichar() {
            echo $this->get_nombre() . " Ha salido a pichar.<br>";
        }
    }
?>