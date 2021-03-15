<?php
    require_once('jugador.php');

    class JDePosicion extends Jugador{
        public function defender() {
            echo $this->get_nombre() . " Ha salido a defender.<br>";
        }
        public function batear() {
            echo $this->get_nombre() . " Ha salido a batear.<br>";
        }
    }
?>