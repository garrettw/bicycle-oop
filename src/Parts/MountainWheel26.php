<?php

namespace Bicycle\Parts;

class MountainWheel26 extends Wheel
{
    public function __construct(MountainTire26 $tire, InnerTube26 $innerTube)
    {
        parent::__construct($tire, $innerTube, 26);
    }
}
