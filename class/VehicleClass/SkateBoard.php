<?php

require_once 'Vehicle.php';

// Bicycle.php
class SkateBoard extends Vehicle
{
    public function __construct(string $color)
    {
        parent::__construct($color, 1, 4);
    }
}

