<?php

/**
 * Class ArrayList
 *
 */
class ArrayList implements ArrayAccess
{

    private $array;

    public function __construct(?array $arr)
    {
        $this->array = $arr ?? [];
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return (in_array($offset, $this->array, true));
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        if ($this->offsetExists($offset)) {
            return $this->array[$offset];
        }
        throw new RuntimeException("Array index out of bound");
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
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            unset($this->array[$offset]);
            return $this;
        }
        throw new RuntimeException("Array index out of bound");
    }
}

$arr = new ArrayList();

