<?php

require_once 'class/VehicleClass/Vehicle.php';
require_once 'class/VehicleClass/Car.php';
require_once 'class/VehicleClass/Bicycle.php';
require_once 'class/VehicleClass/SkateBoard.php';

$car = new Car('red',5, 'electric');
$skateBoard = new SkateBoard('blue');
$bike = new Bicycle('yellow', 1);

echo $car->switchOn() . "\n";
//echo $skateBoard->switchOn();
echo $bike->switchOn() . "\n";
$bike->setCurrentSpeed(11);
echo $bike->switchOn() . "\n";
echo $car->switchOff() . "\n";
echo $bike->switchOff() . "\n";