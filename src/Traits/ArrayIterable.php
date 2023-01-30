<?php


namespace Codebuster\OopArrays\Traits;


trait ArrayIterable
{
    public function current()
    {
        return $this->array[$this->pointer];
    }

    public function next(): void
    {
        ++$this->pointer;
    }

    public function key()
    {
        return $this->array[$this->pointer];
    }

    public function valid(): bool
    {
        return isset($this->array[$this->pointer]);
    }

    public function rewind(): void
    {
        $this->pointer = 0;
    }

}