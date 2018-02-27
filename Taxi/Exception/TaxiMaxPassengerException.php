<?php

namespace Taxi\Taxi\Exception;

use Taxi\Exception\BaseException;

class TaxiMaxPassengerException extends BaseException
{
    protected $message = 'There are a lot of passengers, we can not take you.';
}
