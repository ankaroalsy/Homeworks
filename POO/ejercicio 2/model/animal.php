<?php
    class Animal {
            private $tipo;
            private $nombre;
            private $sexo;
            private $edad = 0;
            public function __construct ($tipo, $nombre, $sexo){
                $this->tipo   = $tipo;
                $this->nombre = $nombre;
                $this->sexo = $sexo;
                echo "Animal ha nacido";
            }
            public function comer() {
                echo "Comido con exito";
            }
            public function dormir() {
                echo "Durmiendo";
                sleep(28800);//durmiendo toda la noche
                $this->despertar();
            }
            public function despertar() {
                echo "Ha despertado"; 
            }
    }
?>