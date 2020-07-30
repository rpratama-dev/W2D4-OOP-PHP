<?php
    class Ape extends Animal
    {
        //public $name = ""; 
        private $behav = "Auooo"; 

        public function __construct($name) 
        { 
            $this->yell($name);
        }

        public function yell($name){  
            $this->setLegs(2); 
            $this->setName($name); 
            $this->setColdBlood(false); 
            $this->setBehavior($this->behav);   
        }
    }
?>