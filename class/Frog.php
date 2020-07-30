<?php

    class Frog extends Animal
    {
        //public $name = ""; 
        private $behav = "hop hop"; 

        public function __construct($name) 
        {  
            $this->jump($name);
        }

        public function jump($name){
            $this->setLegs(4); 
            $this->setName($name); 
            $this->setColdBlood(true); 
            $this->setBehavior($this->behav);  
        }
    }

?>