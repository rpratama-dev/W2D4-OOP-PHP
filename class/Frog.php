<?php

    class Frog extends Animal
    {
        //public $name = ""; 
        private $behav = "Hop Hop"; 

        public function __construct($name) 
        {  
            $this->setName($name); 
        }

        public function jump(){
            $this->setBehavior($this->behav);  
        }
    }

?>