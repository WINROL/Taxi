<?php

namespace Taxi\Taxi\TaxiPassengerInterface;

use Taxi\Passenger\PassengerInterface\PassengerInterface;

interface TaxiPassengerInterface
{
    public function addPassenger(PassengerInterface $passenger);
    public function releasePassenger(PassengerInterface $passenger);
    public function releasePassengers();
}