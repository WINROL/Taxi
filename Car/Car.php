<?php
namespace Taxi\Car;

abstract class Car
{
    protected $name;
    protected $maxPassengers = 4;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getMaxPassengers()
    {
        return $this->maxPassengers;
    }

    /**
     * @param int $maxPassengers
     */
    public function setMaxPassengers($maxPassengers)
    {
        $this->maxPassengers = $maxPassengers;
    }
}
