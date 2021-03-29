<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("blue");
var_dump($bike);

$bike->color = 'blue';
$bike->currentSpeed = 0;
var_dump($bike); // then, another dump.

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$redCar = new Car("Red", 5, "Electricity");
var_dump($redCar);

echo $redCar->start();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $redCar->forward();
echo $redCar->forward();
echo $redCar->forward();
echo $redCar->forward();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $redCar->brake();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br>';
