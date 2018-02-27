<?php

namespace Taxi\Passenger;

use Taxi\Passenger\PassengerInterface\PassengerInterface;

class Passenger implements PassengerInterface
{
    protected $destination;

    public function __construct($destination)
    {
        $this->setDestination($destination);
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }
}
