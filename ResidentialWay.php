<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function addVehicle($vehicle)
    {
        echo "All types of vehicules allowed <br>";
        $this->setCurrentVehicles($vehicle);
    }
}