<?php
    class Auto {
        protected $nro_serie_motor;
        protected $placa;
        protected $color;
        protected $marca;
        protected $anio;
        protected $precio;
        protected $cant_pasajeros;
        public function get_nro_serie_motor() {
            return $this->nro_serie_motor;
        }
        public function set_nro_serie_motor($nro_serie_motor){
            $this->nro_serie_motor = $nro_serie_motor;
        }
        public function get_placa() {
            return $this->placa;
        }
        public function set_placa($placa){
            $this->placa = $placa;
        }
        public function get_color() {
            return $this->color;
        }
        public function set_color($color){
            $this->color = $color;
        }
        public function get_marca() {
            return $this->marca;
        }
        public function set_marca($marca){
            $this->marca = $marca;
        }
        public function get_anio() {
            return $this->anio;
        }
        public function set_anio($anio){
            $this->anio = $anio;
        }
        public function get_precio() {
            return $this->precio;
        }
        public function set_precio($precio){
            $this->precio = $precio;
        }
        public function get_cant_pasajeros() {
            return $this->cant_pasajeros;
        }
        public function set_cant_pasajeros($cant_pasajeros){
            $this->cant_pasajeros = $cant_pasajeros;
        }
        public function mostrar_auto() {
            echo "<h1>Mostrando nuevo auto guardado</h1>
                  <p>
                    <b>Numero de serie motor:</b><br>
                    <span>" . $this->get_nro_serie_motor() . "</span><br>
                    <b>Placa:</b><br>
                    <span>" . $this->get_placa() . "</span><br>
                    <b>Color:</b><br>
                    <span>" . $this->get_color() . "</span><br>
                    <b>Marca:</b><br>
                    <span>" . $this->get_marca() . "</span><br>
                    <b>Anio:</b><br>
                    <span>" . $this->get_anio() . "</span><br>
                    <b>Cantidad de pasajeros:</b><br>
                    <span>" . $this->get_cant_pasajeros() . "</span><br>
                    <b>Precio:</b><br>
                    <span>" . $this->get_precio() . "</span><br>
                  </p>";        
        }
    }
?>