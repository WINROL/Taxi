<?php

namespace Taxi\Exception;

/**
 * Class BaseException
 * @package Taxi\Exception
 */
class BaseException extends \Exception
{
    protected $message = '';

    /**
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct($message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct($this->message . $message, $code, $previous);
    }
}
