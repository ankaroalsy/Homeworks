<?php
    require_once("auto.php");

    class Camioneta extends Auto{
        private $cant_kgs;
        private $ejes;
        private $rodadas;
        public function get_cant_kgs() {
            return $this->cant_kgs;
        }
        public function set_cant_kgs($cant_kgs){
            $this->cant_kgs = $cant_kgs;
        }
        public function get_ejes() {
            return $this->ejes;
        }
        public function set_ejes($ejes){
            $this->ejes = $ejes;
        }
        public function get_rodadas() {
            return $this->rodadas;
        }
        public function set_rodadas($rodadas){
            $this->rodadas = $rodadas;
        }
        public function mostrar_camioneta() {
            echo "<h1>Mostrando nueva camioneta guardada</h1>
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
                    <b>Cantidad Kilogramos soportados:</b><br>
                    <span>" . $this->get_cant_kgs() . "</span><br>
                    <b>Ejes:</b><br>
                    <span>" . $this->get_ejes() . "</span><br>
                    <b>Rodadas:</b><br>
                    <span>" . $this->get_rodadas() . "</span><br>
                    <b>Precio:</b><br>
                    <span>" . $this->get_precio() . "</span><br>
                </p>";        
        }
    }
?>