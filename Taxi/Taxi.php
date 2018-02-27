<?php

namespace Taxi\Taxi;

use Taxi\Car\Car;
use Taxi\Door\DoorInterface\DoorInterface;
use Taxi\Location\LocationInterface\LocationInterface;
use Taxi\Passenger\PassengerInterface\PassengerInterface;
use Taxi\Taxi\Exception\TaxiMaxPassengerException;
use Taxi\Taxi\TaxiInterface\TaxiInterface;
use Taxi\Taxi\TaxiPassengerInterface\TaxiPassengerInterface;


class Taxi extends Car implements TaxiPassengerInterface, TaxiInterface
{
    protected $location;
    protected $door;
    protected $passengers;
    protected $minPassengers = 3;

    /**
     * Taxi constructor.
     * @param LocationInterface $location
     * @param DoorInterface $door
     */
    public function __construct(LocationInterface $location, DoorInterface $door)
    {
        $this->location = $location;
        $this->door = $door;
    }

    /**
     * @param PassengerInterface $passenger
     * @return $this
     * @throws TaxiMaxPassengerException
     */
    public function addPassenger(PassengerInterface $passenger)
    {
        if (count($this->passengers) == $this->getMaxPassengers()) {
            throw new TaxiMaxPassengerException();
        }

        $this->door->open();

        $passId = spl_object_hash($passenger);
        echo 'Added passenger name: ' . $passId . PHP_EOL;

        $this->passengers[spl_object_hash($passenger)] = $passenger;

        return $this;
    }

    /**
     * @param PassengerInterface $passenger
     * @return $this
     */
    public function releasePassenger(PassengerInterface $passenger)
    {
        $this->door->open();
        $passId = spl_object_hash($passenger);

        if (isset($this->passengers[$passId])) {
            unset($this->passengers[$passId]);

            echo 'release Passenger name: ' . $passId . PHP_EOL;
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function releasePassengers()
    {
        /**
         * @var PassengerInterface $passenger
         */
        foreach ($this->passengers as $passenger) {
            if ($this->location->getCurrent() == $passenger->getDestination()) {
                $this->stop();
                $this->releasePassenger($passenger);
            }
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function run()
    {
        if (count($this->passengers) < $this->minPassengers) {
            $this->sleep();
        }

        $this->door->close();

        echo 'Taxi run. start: '. $this->location->getStart() . ' end: ' . $this->location->getEnd() . PHP_EOL;
        $this->setCurrentLocation();

        return $this;
    }

    /**
     * @return $this
     */
    public function setCurrentLocation()
    {
        $current = $this->location->getCurrent();
        $this->location->setCurrent(++$current);

        return $this;
    }

    /**
     * @return $this
     */
    public function stop()
    {
        echo 'Taxi stop: ' . $this->location->getCurrent() . PHP_EOL;

        return $this;
    }

    /**
     * @param int $minute
     * @return $this
     */
    public function sleep($minute = 1)
    {
        echo 'Sleep 1 min...' . PHP_EOL;

        return $this;
    }
}
