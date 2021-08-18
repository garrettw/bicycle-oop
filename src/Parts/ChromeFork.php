<?php

namespace Bicycle\Parts;

class ChromeFork extends Fork
{
    public function __construct(Wheel $frontWheel, Handlebar $handlebar)
    {
        parent::__construct($frontWheel, $handlebar, 'Chrome');
    }
}
