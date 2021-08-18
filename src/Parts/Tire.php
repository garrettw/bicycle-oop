<?php

namespace Bicycle\Parts;

abstract class Tire
{
    /** @var int wheel diameter in inches */
    private $size;

    /** @var int let's say this is sized in cm */
    private $treadWidth;

    public function __construct($size = 0, $treadWidth = 0)
    {
        $this->size = $size;
        $this->treadWidth = $treadWidth;
    }

    public function size(): int
    {
        return $this->size;
    }

    public function treadWidth(): int
    {
        return $this->treadWidth;
    }
}
