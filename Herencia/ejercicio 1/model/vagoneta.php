<?php
    require_once("auto.php");
    
    class Vagoneta extends Auto{
        public function mostrar_vagoneta() {
            echo "<h1>Mostrando nueva vagoneta guardada</h1>
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