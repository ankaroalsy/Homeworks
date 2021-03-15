<?php
    class Jugador {
        protected $nombre;
        protected $nro_uniforme;
        protected $posicion;
        public function get_nombre() {
            return $this->nombre;
        }
        public function set_nombre($nombre){
            $this->nombre = $nombre;
        }
        public function get_nro_uniforme() {
            return $this->nro_uniforme;
        }
        public function set_nro_uniforme($nro_uniforme){
            $this->nro_uniforme = $nro_uniforme;
        }
        public function get_posicion() {
            return $this->posicion;
        }
        public function set_posicion($posicion){
            $this->posicion = $posicion;
        }
    }
?>