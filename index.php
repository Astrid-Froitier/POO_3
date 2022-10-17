<?php

require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';
require_once 'Vehicle.php';
require_once 'HighWay.php';

$car = new Vehicle('red',2, 50);
var_dump($car);

$motorway = new MotorWay(4, 130);
$motorway->addVehicle('Bike');
$motorway->addVehicle('Moto');
$motorway->addVehicle('Skateboard');
var_dump($motorway->getCurrentVehicles());

$pedestrian = new PedestrianWay(4,50);
$pedestrian->addVehicle('Bike');
$pedestrian->addVehicle('Moto');
$pedestrian->addVehicle('Skateboard');
var_dump($pedestrian->getCurrentVehicles());

$residential = new ResidentialWay(4,50);
$residential->addVehicle('Bike');
$residential->addVehicle('Moto');
$residential->addVehicle('Skateboard');
var_dump($residential->getCurrentVehicles());