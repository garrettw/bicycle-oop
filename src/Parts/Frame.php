<?php

namespace Bicycle\Parts;

abstract class Frame
{
    /** @var string */
    protected $material;

    public function __construct($material = 'Unknown')
    {
        $this->material = $material;
    }

    public function material(): string
    {
        return $this->material;
    }
}
