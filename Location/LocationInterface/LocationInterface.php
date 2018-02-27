<?php

namespace Taxi\Location\LocationInterface;

interface LocationInterface
{
    public function setStart($start);
    public function getStart();

    public function setEnd($end);
    public function getEnd();

    public function setCurrent($current);
    public function getCurrent();
}
