<?php

namespace Bicycle\Parts;

abstract class Fork
{
    /** @var Wheel */
    protected $frontWheel;

    /** @var Handlebar */
    protected $handlebar;

    /** @var string */
    protected $material;

    public function __construct(Wheel $frontWheel, Handlebar $handlebar, $material = 'Unknown')
    {
        $this->frontWheel = $frontWheel;
        $this->handlebar  = $handlebar;
        $this->material   = $material;
    }

    public function frontWheel(): Wheel
    {
        return $this->frontWheel;
    }

    public function handlebar(): Handlebar
    {
        return $this->handlebar;
    }

    public function material(): string
    {
        return $this->material;
    }
}
