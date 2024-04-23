<?php
  require_once 'Truck.php';
  require_once 'Bike.php';
  
  $bmx = new Bike('Red', 40, 0, 0);
  
  echo "Created Bmx bike.\nStatus:\n";
  $bmx->status();
  $bmx->cadencestatus();
  
  echo "Set the cadense to 10\n";
  $bmx->setCadence(10);
  $bmx->status();
  $bmx->cadencestatus();
  
  echo "\nAccelerate by 15:";
  $bmx->accelerate(15, 1); // Pass two arguments: accelerationPower and accelerationTime
  $bmx->status();
  $bmx->cadencestatus();
  
  echo "\nRing bell.";
  $bmx->ringBell();
  
  $bigTruck = new Truck('Grey', 0, 200, 'HGC-3456F');
  
  echo "\nCreated a Truck.\nStatus:\n";
  $bigTruck->setTires(6);
  $bigTruck->status();
  $bigTruck->plateStatus();
  echo "\nAccelerating, 10 of power for ten seconds:";
  $bigTruck->accelerate(10, 10);
  
  echo "\nBreaking, 10 of power for 10 sec.";
  $bigTruck->accelerate(10, 10);
  
  echo "\nApplied air pressure of 10:";
  $bigTruck->applyAir(390, 390);
  
  echo "\nDone.";
?>
