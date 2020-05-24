<?php

class Car {

  /* ATTRIBUTES */

  public $name; // Character
  protected $model; // Character
  protected $yearOfModel; // Integer
  private $engineType; // Character
  public $color; // Character
  public $open; // Boolean
  public $key; // Boolean
  public $engineIsOn; // Boolean
  public $situation; // Character

  /* METHOD */

  public function drive($open, $engineIsOn) {

    if ($this->key == true) {
      function openTheDoor() {
        $open = true;
        return $open;
      }

      function turnOnTheCar() {
        $engineIsOn = true;
        return $engineIsOn;
      }
      
      function startDriving(){
        $driving = true; // Consider this forgetting that a car can be turned on whithout moving
        $situation = "Running...";
        echo "The car is: ".$situation;
      }

      openTheDoor();
      turnOnTheCar();
      startDriving();

    } else {
      $situation = "Stopped...";       
      echo "The car is: ".$situation;
    }

  }

  protected function turnRadioOn() {
    // Coming soon...
  }
}

?>