<?php

  require('./classes/Car.php');

  $firstCar = new Car;
    $firstCar->name = "Thunderbird";
    $firstCar->color = "Red";
    $firstCar->open = false;
    $firstCar->engineIsOn = false;
    $firstCar->key = true;
        
  $secondCar = new Car;
    $secondCar->name = "Bugatti";
    $secondCar->color = "Yellow";
    $secondCar->open = true;
    $secondCar->engineIsOn = false;
    $secondCar->key = true;

  $thirdCar = new Car;
    $thirdCar->name = "Bentley";
    $thirdCar->color = "Pink";
    $thirdCar->open = false;
    $thirdCar->engineIsOn = false;
    $thirdCar->key = false;
  
  $fourthCar = new Car;
    $fourthCar->name = "Kia";
    $fourthCar->color = "Light Green";
    $fourthCar->open = true;
    $fourthCar->engineIsOn = true; 
    $fourthCar->key = true;

  $fifthCar = new Car;
    $fifthCar->name = "Lamborghini";
    $fifthCar->color = "White";
    $fifthCar->open = false;
    $fifthCar->engineIsOn = false;
    $fifthCar->key = true;

?>