<?php
  class Vehicle {
      protected $color;
      protected $speed;
      protected $maxSpeed;
      protected $tireNum;
  
      function __construct($speed = 0, $maxSpeed = 0, $color = 'unknown', $tireNum = 0) {
          $this->color = $color;
          $this->speed = $speed;
          $this->maxSpeed = $maxSpeed;
          $this->tireNum = $tireNum;
      }
  
      function accelerate($accelerationPower, $accelerationTime) {
          $this->speed += ($accelerationPower * $accelerationTime);
          echo "New speed: " . $this->speed . "\n";
      }
  
      function break($brakePower, $brakeTime) {
          $this->speed -= ($brakePower * $brakeTime);
          return $this->speed;
      }
  
      function status() {
          echo "-> Speed: " . $this->speed . "\n";
          echo "-> Max Speed: " . $this->maxSpeed . "\n";
          echo "-> Color: " . $this->color . "\n";
          echo "-> Tires: " . $this->tireNum . "\n";
      }
  }
?>
