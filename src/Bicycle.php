<?php

namespace Bicycle;

use Bicycle\Parts\Fork;
use Bicycle\Parts\Frame;
use Bicycle\Parts\Seat;
use Bicycle\Parts\Wheel;

class Bicycle
{
    /** @var Frame */
    private $frame;

    /** @var Fork */
    private $fork;

    /** @var Wheel */
    private $backWheel;

    /** @var Seat */
    private $seat;

    public function __construct(
        Frame $frame,
        Fork $fork,
        Wheel $backWheel,
        Seat $seat
    ) {
        $this->frame      = $frame;
        $this->fork       = $fork;
        $this->backWheel  = $backWheel;
        $this->seat       = $seat;
    }

    public function frame(): Frame
    {
        return $this->frame;
    }

    public function fork(): Fork
    {
        return $this->fork;
    }

    public function frontWheel(): Wheel
    {
        return $this->fork->frontWheel();
    }

    public function backWheel(): Wheel
    {
        return $this->backWheel;
    }

    public function seat(): Seat
    {
        return $this->seat;
    }
}
