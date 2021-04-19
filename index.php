<?php

require_once 'class/Vehicle.php';
require_once 'class/Car.php';


$car = new Car('red',5, 'electric');

// $car->setParkBrake(false);

try{
    $car->start();
} catch(Exception $e){
    $car->setParkBrake(false);
} finally{
    echo "Ma voiture roule comme un donut \n";
}
