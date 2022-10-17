<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    public const ALLOWED_ENERGIES = 
    [
        'fuel',
        'electric',
    ];
        // Constructor before php8

    private string $energy;
    private int $fuelLevel;

    public function __construct(string $color, int $nbSeats, string $energy, int $currentSpeed)
    {  
        parent::__construct($color,$nbSeats, $currentSpeed, $energy);
        $this->energy = $energy;
    }

        // Constructor with php8

    // public function __construct(private int $nbWheels = 4, private int $currentSpeed = 90, private string $color = 'white', private int $nbSeats = 5, private string $energy = 'gasoline', private int $fuelLevel = 40)
    // {
    //     $this->nbWheels = $nbWheels;
    //     $this->currentSpeed = $currentSpeed;
    //     $this->color = $color;
    //     $this->nbSeats = $nbSeats;
    //     $this->energy = $energy;
    //     $this->fuelLevel = $fuelLevel;
    // }



    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
            // $this->setEnergy($energy);
        }
        return $this;
    }


    public function getFuelLevel(): int
    {   
        return $this->fuelLevel;
    }

    public function setFuelLevel(int $fuelLevel) : void
    {
        $this->fuelLevel = $fuelLevel;
    }


}