<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function addVehicle($vehicle)
    {
        if ($vehicle === 'Bike' || $vehicle === 'Skateboard')
        {
            $this->setCurrentVehicles($vehicle);
        } else
        {
            echo 'This vehicle is not allowed in Pedestrian way <br>';
        }
    }
}