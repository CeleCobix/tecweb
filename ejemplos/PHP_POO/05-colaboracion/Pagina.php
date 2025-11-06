<?php

    class Cabecera {
        private $titulo;

        public function __construct($title) {
            $this->titulo = $title;
        }

        public function graficar(){
            $estilo = 'text-align: center;';
            echo '<h1 style = "'.$estilo.'">'.$this->titulo.'</h1>';
        }
    }

    class Cuerpo{
        private $lineas = array();

        public function insertar_parrafo($line){
            $this->lineas[] = $line;
        }

        public function graficar(){
            for($i=0; $i < count($this->lineas); $i++){
                echo '<p>'.$this->lineas[$i].'</p>';

            }
        }
    }

    class Pie{
        private $mensaje;

        public function __construct($msg) {
            $this->mensaje = $msg;
        }

        public function graficar(){
            $estilo = 'text-align: center;';
            echo '<h4 style = "'.$estilo.'">'.$this->mensaje.'</h4>';
        }
    }

    class Pagina{
        private $cabecera;
        private $cuerpo;
        private $pie;

        public function __construct($title, $msg) {
            $this->cabecera = new Cabecera($title);
            $this->cuerpo = new Cuerpo();
            $this->pie = new Pie($msg);
        }

        public function agregar_parrafo($line){
            $this->cuerpo->insertar_parrafo($line);
        }

        public function graficar(){
            $this->cabecera->graficar();
            $this->cuerpo->graficar();
            $this->pie->graficar();
        }
    }

?>