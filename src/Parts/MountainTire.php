<?php

namespace Bicycle\Parts;

abstract class MountainTire extends Tire
{
    public function construct($size = 0)
    {
        parent::__construct($size, 3);
    }
}
