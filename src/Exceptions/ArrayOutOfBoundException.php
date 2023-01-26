<?php

namespace Codebuster\OopArrays\Exceptions;

use Exception;

class ArrayOutOfBoundException extends Exception
{
    protected $message = "Array out of bound";
}