<?php
    class Computer extends Product{
        protected $keyboard_type;
        protected $keyboard_type;

        function __construct($_name, $_price, $_keyboard_type, $_keyboard_type){
            parent::__construct($_name,$_price);

            $this->keyboard_type = $_keyboard_type;
            $this->keyboard_switch = $_keyboard_switch;
        }

        function setType($_keyboard_type){
            $this->keyboard_type = $_keyboard_type;
        }
        function getType(){
            return $this->keyboard_type;
        }

        function setSwitch($_keyboard_switch){
            $this->keyboard_switch = $_keyboard_switch;
        }
        function getSwitch(){
            return $this->keyboard_switch;
        }
    }
?>