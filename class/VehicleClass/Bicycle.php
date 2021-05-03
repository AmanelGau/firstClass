<?php

require_once 'Vehicle.php';
require_once __DIR__ . '/../../interface/LightableInterface.php';

// Bicycle.php
class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if (isset($this->currentSpeed) && $this->currentSpeed > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}

