<?php
    class Ape extends Animal
    {
        //public $name = ""; 
        private $behav = "Auooo"; 

        public function __construct($name) 
        {  
            $this->setName($name); 
        }

        public function yell(){  
            $this->setBehavior($this->behav);   
        }
    }
?>