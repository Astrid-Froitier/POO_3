<?php

abstract class HighWay
{
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;
    
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }


    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLanes = $nbLane;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }   

    abstract protected function addVehicle($vehicle);   
   
}