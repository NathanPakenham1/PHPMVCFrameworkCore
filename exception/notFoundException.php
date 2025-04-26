<?php

namespace nathanpakenham\core\exception;

use Exception;

class notFoundException extends Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}
