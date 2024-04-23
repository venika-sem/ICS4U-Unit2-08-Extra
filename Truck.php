<?php
  if (!class_exists('Truck')) {
      require_once 'Vehicle.php';
  
      class Truck extends Vehicle {
          private $liscencePlate;
  
          function __construct($color = 'unknown', $maxSpeed = 0, $speed = 0, $liscencePlate = 'unknown', $tireNum = 0) {
              parent::__construct($maxSpeed, $speed);
              $this->liscencePlate = $liscencePlate;
              $this->color = $color;
              $this->tireNum = $tireNum;
          }
  
          function applyAir($speed, $airPressure) {
              $this->speed = $speed - $airPressure / 2;
              echo "New Speed: " . $this->speed . "\n";
          }
  
          function plateStatus() {
              echo "-> Liscence plate: " . $this->liscencePlate . "\n";
          }
  
          function applyAirStatus() {
              echo "New Speed: " . $this->speed . "\n";
          }
  
          function setTires($tireNum) {
              $this->tireNum = $tireNum;
          }
      }
  }
?>
