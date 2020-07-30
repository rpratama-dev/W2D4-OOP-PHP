<?php
  require_once "class\Animal.php";
  require_once "class\Ape.php";
  require_once "class\Frog.php";

  animal();
  ape();
  frog();

  //release 0
  function animal(){
    $sheep = new Animal("Shaun");  //"shaun"  
    cetakOutput($sheep); 
  }
  
  //release 1
  function ape(){
    $sungokong = new Ape("Kera Sakti"); 
    $sungokong->setLegs(2); 
    $sungokong->setColdBlood(false); 
    $sungokong->yell(); 
    cetakOutput($sungokong);
  }

  //release 1
  function frog(){
    $kodok = new Frog("Buduk");
    $kodok->setLegs(4);   
    $kodok->setColdBlood(true); 
    $kodok->jump(); 
    cetakOutput($kodok); 
  }

  function cetakOutput($obj){   
    echo "<br>Animal Name : ".  $obj->getName();
    echo "<br>Animal Behavior : ". $obj->getBehavior();
    echo "<br>Animal Legs : ". $obj->getLegs();
    echo "<br>Animal Cold Blooded ? : " . $obj->getColdBlood(); 
    echo "<br>";
  }
?>
