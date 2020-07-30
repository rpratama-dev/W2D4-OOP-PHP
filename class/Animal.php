<?php
class Animal 
{
    protected $name = "";
    protected $legs = 2;
    protected $cold_blooded = false;
    protected $behaviour = "-";
  
    public function __construct($name) 
    {
      $this->setName($name);
    }

    public function setName($name){
      $this->name = $name;
    }
    
    public function getName(){
      return $this->name;
    }

    public function setLegs($legs){
      $this->legs = $legs;
    }

    public function getLegs(){
      return $this->legs;
    }

    public function setColdBlood($coldBlood){
      $this->cold_blooded = $coldBlood;
    }

    public function getColdBlood(){
      return $this->cold_blooded ? 'True' : 'False';
    }

    public function setBehavior($behav){ 
      $this->behaviour = $behav;
    }

    public function getBehavior(){
      return $this->behaviour;
    }

}
?>
