<?php

namespace Taxi\Location;

use Taxi\Location\LocationInterface\LocationInterface;

class Location implements LocationInterface
{
    protected $start;
    protected $end;
    protected $current;

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;
        $this->setCurrent($start);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param $current
     * @return $this
     */
    public function setCurrent($current)
    {
        $this->current = $current;

        return $this;
    }
}
