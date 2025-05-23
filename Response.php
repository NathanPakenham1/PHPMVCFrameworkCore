<?php

namespace nathanpakenham\core;

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $string)
    {
        header('Location: ' . $string);
    }
}
