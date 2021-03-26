<?php

require_once 'Bicycle.php';
$bike = new Bicycle('blue');
var_dump($bike);

$bike->setCurrentSpeed(0);
var_dump($bike);

/*echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();*/

$rockrider = new Bicycle('yellow');


$tornado = new Bicycle('black');


require_once 'Car.php';
$fiat = new Car('grey', 4, 'electric');

//echo $fiat->getEnergyType();

echo $fiat->forward() . '<br>';
echo $fiat->brake();