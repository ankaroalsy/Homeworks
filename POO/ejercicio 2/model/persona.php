<?php
    require_once('animal.php');
    // CLASE 3 CON HERENCIA
    class Persona extends Animal {
        private $nacionalidad;

        public function vestirse(){
            echo "Persona se ha vestido";
        }
        public function estudiar(){
            echo 'Ha empezado a estudiar';
        }
    }
?>