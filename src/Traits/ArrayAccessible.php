<?php


namespace Codebuster\OopArrays\Traits;


use Codebuster\OopArrays\ArrayList;
use Codebuster\OopArrays\Exceptions\ArrayOutOfBoundException;

trait ArrayAccessible
{
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
}