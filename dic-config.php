<?php

use Bicycle\Parts;

return [
    '*' => [
        'substitutions' => [
            Parts\Frame::class       => Parts\TitaniumFrame::class,
            Parts\Fork::class        => Parts\ChromeFork::class,
            Parts\Handlebar::class   => Parts\StraightHandlebar::class,
            Parts\Seat::class        => Parts\StandardSeat::class,
            Parts\Wheel::class       => Parts\MountainWheel26::class,
            Parts\Tire::class        => Parts\MountainTire26::class,
            Parts\InnerTube26::class => Parts\RubberInnerTube26::class,
        ]
    ],
];
