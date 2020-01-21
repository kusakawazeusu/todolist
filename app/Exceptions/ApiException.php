<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class ApiException extends Exception
{
    private $errors = [];

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render()
    {
        return response()->json([
            'message' => $this->message,
            'errors' => $this->errors
        ], $this->getCode());
    }

    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }
}
