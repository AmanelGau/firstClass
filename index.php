<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


$truck = new Truck('red', 6, 25);
echo $truck->forward();
$truck->setLoad(15);
var_dump($truck);