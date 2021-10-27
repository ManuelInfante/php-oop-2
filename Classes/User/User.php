<?php
    require_once __DIR__ . '/../Trait/Trait_user.php';

    class User{
        use TraitUser;

        protected $user_name;
        protected $user_sconto: 0;


        function __construct($_user_name, $_user_prime)
        {
            $this->user_name = $_user_name;
            $this->user_prime = $_user_prime;
        }

        function setUserName($_user_name){
            $this->user_name = $_user_name;
        }
        

        function getUserName(){
            return $this->user_name;
        }    

        function setUserSconto(){
            if($this->user_sconto){
                $this->user_sconto = 30;
            } else {
                null
            }
        }
        
        function getUserSconto(){
            return $this->user_sconto;
        }    

    }

?>