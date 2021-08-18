<?php

namespace Bicycle\Parts;

abstract class InnerTube
{
    /** @var string */
    protected $material;

    /** @var int */
    protected $size;

    public function __construct($material = 'Unknown', $size = 0)
    {
        $this->material = $material;
        $this->size = $size;
    }

    public function material(): string
    {
        return $this->material;
    }

    public function size(): int
    {
        return $this->size;
    }
}
