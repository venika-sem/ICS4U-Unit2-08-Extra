<?php
  if (!class_exists('Bike')) {
      require_once 'Vehicle.php';
  
      class Bike extends Vehicle {
          private $cadence;
  
          function __construct($color = 'unknown', $maxSpeed = 0, $speed = 0, $cadence = 0, $tireNum = 2) {
              parent::__construct($maxSpeed, $speed);
              $this->cadence = $cadence;
              $this->color = $color;
              $this->tireNum = $tireNum;
          }
  
          function accelerate($accelerationPower, $accelerationTime) {
              $this->cadence += ($accelerationPower * $accelerationTime);
              return $this->cadence;
          }
  
          function setCadence($cadence) {
              $this->cadence = $cadence;
              $this->speed = $cadence * 2;
          }
  
          function ringBell() {
              echo 'Ding ding!';
          }
  
          function cadencestatus() {
              echo "-> Cadence: " . $this->cadence . "\n";
          }
      }
  }
?>
