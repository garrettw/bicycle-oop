<?php

namespace Bicycle\Parts;

abstract class InnerTube26 extends InnerTube
{
    public function __construct($material)
    {
        parent::__construct($material, 26);
    }
}
