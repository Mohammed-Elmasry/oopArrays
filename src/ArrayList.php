<?php

namespace Codebuster\OopArrays;

use ArrayAccess;
use Codebuster\OopArrays\Exceptions\ArrayOutOfBoundException;

/**
 * Class ArrayList
 *
 */
class ArrayList implements ArrayAccess
{

    public const EMPTY_LENGTH = 0;
    private $array;

    public function __construct(array $arr = [])
    {
        $this->array = $arr;
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->array[$offset]);
    }

    /**
     * @param mixed $offset
     * @return mixed
     * @throws ArrayOutOfBoundException
     */
    public function offsetGet($offset)
    {
        if ($this->offsetExists($offset)) {
            return $this->array[$offset];
        }
        throw new ArrayOutOfBoundException();
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value): void
    {
        $this->array[$offset] = $value;
    }

    /**
     * @param mixed $offset
     * @return $this|void
     * @throws ArrayOutOfBoundException
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            unset($this->array[$offset]);
            return $this;
        }
        throw new ArrayOutOfBoundException();
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

