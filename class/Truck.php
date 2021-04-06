<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $load;

    public function __construct(string $color, int $nbSeats, string $storageCapacity){
        parent::__construct($color, $nbSeats, 10);
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(): int {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): Truck
    {
        $this->storageCapacity = $storageCapacity;
        return $this;
    }

    public function getLoad(): int {
        return $this->load;
    }

    public function setLoad(int $load): Truck
    {
        $this->load = $load;
        return $this;
    }

    public function isFull(): string 
    {
        if ($load < $storageCapacity) {
            return "in filling";
        } else {
            return "full";
        }
    }
}