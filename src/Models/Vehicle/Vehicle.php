<?php

namespace Composite\TecDoc\Models\Vehicle;

use Composite\TecDoc\Models\Model;

class Vehicle extends Model
{
    /**
     * carId
     *
     * @var int
     */
    public ?int $carId;

    /**
     * carId
     *
     * @var VehicleDetails
     */
    public ?VehicleDetails $vehicleDetails;

    /**
     * Get carId
     *
     * @return  VehicleDetails
     */ 
    public function getVehicleDetails()
    {
        return $this->vehicleDetails;
    }

    /**
     * Set carId
     *
     * @param  VehicleDetails  $vehicleDetails  carId
     *
     * @return  self
     */ 
    public function setVehicleDetails(VehicleDetails $vehicleDetails = null)
    {
        $this->vehicleDetails = $vehicleDetails;

        return $this;
    }

    /**
     * Get carId
     *
     * @return  int
     */ 
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * Set carId
     *
     * @param  int  $carId  carId
     *
     * @return  self
     */ 
    public function setCarId(int $carId = null)
    {
        $this->carId = $carId;

        return $this;
    }
}
