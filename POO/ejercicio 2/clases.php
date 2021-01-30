<?php
    /**
     * JOSE DEMARZO CI 28286982
     * EJERCICIO 2
        . Proponga tres ejemplos de objetos del mundo real:
        · Para cada uno de ellos, determine la clase a la que pertenecen.
        · Asóciele a cada clase un identificador descriptivo adecuado.
        · Enumere varios atributos y operaciones para cada una de las clases.
        · Represente gráficamente las clases utilizando la notación UML.
        · A partir de los diagramas UML, escriba el código funcional necesario para definir una de las clases
        propuestas, sus atributos y método utilizando el lenguaje de programación PHP.
     */

    //  CLASE 1
    class Mensaje {
        private $cuerpo;
        private $remitente;
        private $receptor;
        private $fecha;

        public function __construct ($remitente, $receptor, $cuerpo, $fecha = date('yyyy-mm-dd hh:ii:ss')) {
            $this->crearMensaje($remitente, $receptor, $cuerpo, $fecha);
        }
        public function crearMensaje($remitente, $receptor, $cuerpo, $fecha) {
            $this->cuerpo    = $cuerpo;
            $this->remitente = $remitente;
            $this->receptor  = $receptor;
            $this->fecha     = $fecha;
            $this->guardar();
        }
        public function enviarMensaje(){
            $datos = $this->obtener();
            $this->subir($datos);
        }
        public function borrarMensaje(){
            $datos = $this->obtener();
            $this->cancelar($datos);
        }
        public function subir($datos){
            /**
             * esta funcion es un concepto, serviria para cancelar la subida al servidor tomando datos del mensaje
             */
        }
        public function subir($datos){
            /**
             * esta funcion es un concepto, serviria para subir en mensaje a un servidor tomando datos del mensaje
             */
        }
        public function guardar(){
            /**
             * esta funcion es un concepto, serviria para guardar el mensaje en una base de datos
             */
        }
        public function obtener(){
            /**
             * esta funcion es un concepto, serviria para obtener el mensaje en una base de datos
             */
        }
    }

    // CLASE 2

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