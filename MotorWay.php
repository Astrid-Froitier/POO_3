<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{  
    public function addVehicle($vehicle)
    {
        if ($vehicle === 'Bike' || $vehicle === 'Skateboard')
        {
            echo 'this vehicle is forbidden on the motor Way <br>';
        } else
        {
            $this->setCurrentVehicles($vehicle);
        }

    }

}