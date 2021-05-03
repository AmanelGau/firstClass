<?php

require_once 'Vehicle.php';
require_once __DIR__ . '/../../interface/LightableInterface.php';


class Car extends Vehicle implements LightableInterface
{

    /*
     *      Attributs
     */

    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    private string $energy;
    private int $energyLevel = 100;
    private bool $hasParkBrake = true;

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

    public function setParkBrake(bool $hasParkBrake): Car
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }

    /*
     *      Methods
     */

    public function start()
    {
        if($this->hasParkBrake){
            throw new Exception('Park brake on!!');
        }
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}