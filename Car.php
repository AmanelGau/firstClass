<?php

require_once 'Vehicle.php';


class Car extends Vehicle{

    /*
     *      Attributs
     */

    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    private string $energy;
    private int $energyLevel = 100;

    /*
     *      Constructors
     */

    public function __construct(string $color, int $nbSeats, string $energy){
        parent::__construct($color, $nbSeats, 4);
        $this->energy = $energy;
    }

    /*
     *      Getters and Setters
     */

    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): Car
    {
        $this->energyLevel = $energyLevel;
        return $this;
    }

    /*
     *      Methods
     */

    
}