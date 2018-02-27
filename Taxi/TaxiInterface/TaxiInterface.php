<?php

namespace Taxi\Taxi\TaxiInterface;

interface TaxiInterface
{
    public function run();
    public function stop();
    public function sleep($minute = 1);
    public function setCurrentLocation();
}
