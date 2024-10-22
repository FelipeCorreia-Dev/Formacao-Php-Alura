<?php

namespace ScreenMatch\Exception;

class NotaInvalidException extends \InvalidArgumentException
{

    public function __construct(
        string $message = "É necessário que a nota esteja entre 0 e 10", 
        int $code = 0,
        \Throwable $previous = null
    )
    {
        parent::__construct(message: $message, code: $code, previous: $previous);
    }

};