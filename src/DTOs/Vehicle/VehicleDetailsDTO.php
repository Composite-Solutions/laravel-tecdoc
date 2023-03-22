<?php

namespace Composite\TecDoc\DTOs\Vehicle;

use Composite\TecDoc\Models\Vehicle\VehicleDetails;
use Exception;

class VehicleDetailsDTO
{

    /**
     * Create vehicle details model from array
     *
     * @param  array $articleArray
     * @return Article
     */
    public function createVehicleDetailsModel(array $vehicleDetailArray): VehicleDetails
    {
        $motorCodes = [];
        try {
            if (!isset($vehicleDetailArray["motorCodes"]["array"]) && !empty($vehicleDetailArray["motorCodes"]["array"])) {
                $motorCodesArray = $vehicleDetailArray["motorCodes"]["array"];

                // Make simple array from nested associative array
                foreach ($motorCodesArray as $motorCode) {
                    $motorCodes[] = $motorCode["motorCode"];
                }
            }
        } catch (Exception $ex) {}

        $vehicleDetailArray = $vehicleDetailArray["vehicleDetails"];
        $vehicleDetail = new VehicleDetails();
        $vehicleDetail->setCarId($vehicleDetailArray['carId'] ?? null);
        $vehicleDetail->setCcmTech($vehicleDetailArray['ccmTech'] ?? null);
        $vehicleDetail->setConstructionType($vehicleDetailArray['constructionType'] ?? null);
        $vehicleDetail->setCylinder($vehicleDetailArray['cylinder'] ?? null);
        $vehicleDetail->setCylinderCapacityCcm($vehicleDetailArray['cylinderCapacityCcm'] ?? null);
        $vehicleDetail->setCylinderCapacityLiter($vehicleDetailArray['cylinderCapacityLiter'] ?? null);
        $vehicleDetail->setFuelType($vehicleDetailArray['fuelType'] ?? null);
        $vehicleDetail->setFuelTypeProcess($vehicleDetailArray['fuelTypeProcess'] ?? null);
        $vehicleDetail->setImpulsionType($vehicleDetailArray['impulsionType'] ?? null);
        $vehicleDetail->setManuId($vehicleDetailArray['manuId'] ?? null);
        $vehicleDetail->setManuName($vehicleDetailArray['manuName'] ?? null);
        $vehicleDetail->setModId($vehicleDetailArray['modId'] ?? null);
        $vehicleDetail->setModelName($vehicleDetailArray['modelName'] ?? null);
        $vehicleDetail->setMotorType($vehicleDetailArray['motorType'] ?? null);
        $vehicleDetail->setPowerHpFrom($vehicleDetailArray['powerHpFrom'] ?? null);
        $vehicleDetail->setPowerHpTo($vehicleDetailArray['powerHpTo'] ?? null);
        $vehicleDetail->setPowerKwFrom($vehicleDetailArray['powerKwFrom'] ?? null);
        $vehicleDetail->setPowerKwTo($vehicleDetailArray['powerKwTo'] ?? null);
        $vehicleDetail->setTypeName($vehicleDetailArray['typeName'] ?? null);
        $vehicleDetail->setTypeNumber($vehicleDetailArray['typeNumber'] ?? null);
        $vehicleDetail->setValves($vehicleDetailArray['valves'] ?? null);
        $vehicleDetail->setYearOfConstrFrom($vehicleDetailArray['yearOfConstrFrom'] ?? null);
        $vehicleDetail->setYearOfConstrTo($vehicleDetailArray['yearOfConstrTo'] ?? null);
        $vehicleDetail->setRmiTypeId($vehicleDetailArray['rmiTypeId'] ?? null);
        $vehicleDetail->setMotorCodes($motorCodes);
        return $vehicleDetail;
    }
}
