<?php

namespace Gabievi\Promocodes\Exceptions;

use Exception;

class AlreadyUsedException extends Exception
{
    /**
     * @var string
     */
    protected $message = 'You have already redeemed this code. This promotion can only be used once.';

    /**
     * @var int
     */
    protected $code = 403;
}
