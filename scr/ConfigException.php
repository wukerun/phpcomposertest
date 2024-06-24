<?php

namespace Yzh\Exception;

class ConfigException
{
    public function __construct($message = "", $code = 0)
    {
        $msg = ExceptionCode::getErrorMessage($code);
        if (!empty($message)) {
            $msg .= ": " . $message;
        }
       
    }
}
