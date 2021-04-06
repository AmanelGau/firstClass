<?php

require_once 'class/HighWay.php';
require_once 'class/Vehicle.php';
require_once 'class/Bicycle.php';
require_once 'class/Car.php';
require_once 'class/MotorWay.php';
require_once 'class/PedestrianWay.php';
require_once 'class/ResidentialWay.php';
require_once 'class/Truck.php';

$car = new Car('red',5, 'electric');
$bicycle = new Bicycle('red', 1);
$truck = new Truck('red', 2, 50);
$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$motorWay->addVehicle($car);
$motorWay->addVehicle($bicycle);
$motorWay->addVehicle($truck);
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($bicycle);
$pedestrianWay->addVehicle($truck);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($bicycle);
$residentialWay->addVehicle($truck);

var_dump($motorWay);
var_dump($pedestrianWay);
var_dump($residentialWay);
