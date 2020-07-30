<?php
  require_once "class\Animal.php";
  require_once "class\Ape.php";
  require_once "class\Frog.php";

  $sheep = new Animal("Shaun");  
  echo "<br>Animal Name : ". $sheep->getName();
  echo "<br>Animal Legs : ". $sheep->getLegs();
  echo "<br>Animal Cold Blooded ? : " . $sheep->getColdBlood();
  echo "<br>";

  $sungokong = new Ape("kera sakti");
  echo "<br>Ape Name : ".  $sungokong->getName();
  echo "<br>Ape Behavior : ". $sungokong->getBehavior(); // "Auooo"
  echo "<br>Legs : ". $sungokong->getLegs();
  echo "<br>Animal Cold Blooded ? : " . $sungokong->getColdBlood(); 
  echo "<br>";

  $kodok = new Frog("buduk");
  echo "<br>Frog Name : ".  $kodok->getName();
  echo "<br>Frog Behavior : ". $kodok->getBehavior() ; // "hop hop"
  echo "<br>Legs : ". $kodok->getLegs();
  echo "<br>Animal Cold Blooded ? : " . $kodok->getColdBlood() . "<br>";
?>
