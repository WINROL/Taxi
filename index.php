<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$taxiLocation = new \Taxi\Location\Location();
$taxiLocation->setStart(1)
    ->setEnd(5)
;

$taxi = new \Taxi\Taxi\Taxi($taxiLocation, new \Taxi\Door\Door());

$passenger1 = new \Taxi\Passenger\Passenger(2);
$passenger2 = new \Taxi\Passenger\Passenger(4);

$taxi->addPassenger($passenger1)
    ->addPassenger($passenger2)
    ->run()
;
