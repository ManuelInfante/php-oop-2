<?php

class CreditCard{
        public $number;
        public $expiration;
        public $cvc;

        public function __construct($_number, $cvc, $_expiration){
            if(strlen($_number) = 16){
                $this->number = $_number;
            }else{
                throw new Exception("Numero non valido");
            }

            if(strlen($_cvc) = 3){
                $this->cvc = $_cvc;
            }else{
                throw new Exception("Il CVC deve essere di 3 cifre");
            }

            if($_expiration > date('d/m/Y')){
                $this->expiration = $_expiration;
            }else{
                throw new Exception("La tua carta è scaduta");
            }
        }
    }
?>