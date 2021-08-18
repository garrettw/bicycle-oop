<?php

namespace Bicycle\Parts;

abstract class Wheel
{
    /** @var Tire */
    private $tire;

    /** @var InnerTube */
    private $innerTube;

    /** @var int */
    private $size;

    public function __construct(Tire $tire, InnerTube $innerTube, $size = 0) {
        if ($tire->size() !== $size) {
            throw new \InvalidArgumentException(
                'Tire size (' . $tire->size() . ") does not match wheel size ($size)."
            );
        }

        if ($innerTube->size() !== $size) {
            throw new \InvalidArgumentException(
                'Inner tube size (' . $innerTube->size() . ") does not match wheel size ($size)."
            );
        }

        $this->tire      = $tire;
        $this->innerTube = $innerTube;
        $this->size      = $size;
    }

    public function tire(): Tire
    {
        return $this->tire;
    }

    public function innerTube(): InnerTube
    {
        return $this->innerTube;
    }

    public function size(): int
    {
        return $this->size;
    }
}
