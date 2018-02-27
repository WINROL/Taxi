<?php

namespace Taxi\Door;

use Taxi\Door\DoorInterface\DoorInterface;

class Door implements DoorInterface
{
    protected $open = false;

    public function open()
    {
        if ($this->open) {
            return $this;
        }

        $this->open = true;

        echo 'Door open.' . PHP_EOL;

        return $this;
    }

    public function close()
    {
        if (!$this->open) {
            return $this;
        }

        $this->open = false;

        echo 'Door close.' . PHP_EOL;

        return $this;
    }
}
