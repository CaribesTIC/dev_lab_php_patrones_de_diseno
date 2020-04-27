<?php
// index.php

include_once 'Vehicle.php';

$car = Vehicle::create('car', 4);
echo $car->getType() . ": tiene " . $car->wheels . " ruedas" . "<br>";

$motorcycle = Vehicle::create('motorcycle', 2);
echo $motorcycle->getType() . ": tiene " . $motorcycle->wheels . " ruedas" . "<br>";





