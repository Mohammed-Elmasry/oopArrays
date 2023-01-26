<?php

namespace Codebuster\OopArrays;

use ArrayAccess;
use Codebuster\OopArrays\Exceptions\ArrayOutOfBoundException;
use Codebuster\OopArrays\Traits\ArrayAccessible;

/**
 * Class ArrayList
 *
 */
class ArrayList implements ArrayAccess
{
    use ArrayAccessible;

    public const EMPTY_LENGTH = 0;
    private $array;

    public function __construct(array $arr = [])
    {
        $this->array = $arr;
    }

    /**
     * Check if array is empty.
     * @return bool
     */
    public function isEmpty(): bool
    {
        return count($this->array) === self::EMPTY_LENGTH;
    }

    /**
     * Get array length.
     * @return int
     */
    public function length(): int
    {
        return count($this->array);
    }
}

