<?php

    // Definicion de la clase
    class Cliente{

        // Variables
        private $cliente;

        // Constructor
        public function __construct($rutaWSDL){
            $this->creaObjetoCliente($rutaWSDL);
        }

        // Crea el objeto
        protected function creaObjetoCliente($rutaWSDL){
            $this->cliente = new SoapClient($rutaWSDL);
        }

    }