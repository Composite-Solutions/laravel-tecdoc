<?php

namespace Composite\TecDoc\DTOs\Vehicle;

use Composite\TecDoc\Models\Vehicle\Vehicle;
use Composite\TecDoc\Services\Vehicles;

class VehicleDTO
{
    /**
     * Create vehicle model from array
     *
     * @param  array $articleArray
     * @return Article
     */
    public function createVehicleModel(array $vehicleArray): Vehicle
    {
        $vehicleArray = $vehicleArray['data']['array'][0];
        $vehicle = new Vehicle();
        $vehicle->setCarId($vehicleArray["carId"]);
        $vehicle->setVehicleDetails((new VehicleDetailsDTO())->createVehicleDetailsModel($vehicleArray));
        return $vehicle;
    }

    /**
     * Map vehicles to array
     *
     * @param  array $data
     * @return array
     */
    public function mapVehicleCollection(array $data)
    {
        if (isset($data["data"]) && $data["data"]) {
            $vehicles = [];
            foreach ($data["data"]["array"] as $vehicle) {
                array_push(
                    $vehicles,
                    (new Vehicles())->find($vehicle['carId'])
                );
            }
            return $vehicles;
        }
    }
}
