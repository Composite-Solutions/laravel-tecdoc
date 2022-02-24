<?php

namespace Composite\TecDoc\Models\Vehicle;

use Composite\TecDoc\Models\Model;

class VehicleDetails extends Model
{
    /**
     * carId
     *
     * @var int
     */
    public ?int $carId; // 33251,

    /**
     * ccmTech
     *
     * @var int
     */
    public ?int $ccmTech; // 1197,

    /**
     * constructionType
     *
     * @var string
     */
    public ?string $constructionType; // "Ferdehátú",

    /**
     * cylinder
     *
     * @var int
     */
    public ?int $cylinder; // 4,

    /**
     * cylinderCapacityCcm
     *
     * @var int
     */
    public ?int $cylinderCapacityCcm; // 1197,

    /**
     * cylinderCapacityLiter
     *
     * @var int
     */
    public ?int $cylinderCapacityLiter; // 120,

    /**
     * fuelType
     *
     * @var string
     */
    public ?string $fuelType; // "Benzin",

    /**
     * fuelTypeProcess
     *
     * @var string
     */
    public ?string $fuelTypeProcess; // "Közvetlen befecskendezés",

    /**
     * impulsionType
     *
     * @var string
     */
    public ?string $impulsionType; // "Elsőkerék-hajtás",

    /**
     * manuId
     *
     * @var int
     */
    public ?int $manuId; // 5,

    /**
     * manuName
     *
     * @var string
     */
    public ?string $manuName; // "AUDI",

    /**
     * modId
     *
     * @var int
     */
    public ?int $modId; // 4955,

    /**
     * modelName
     *
     * @var string
     */
    public ?string $modelName; // "A3 (8P1)",

    /**
     * motorType
     *
     * @var string
     */
    public ?string $motorType; // "Otto",

    /**
     * powerHpFrom
     *
     * @var int
     */
    public ?int $powerHpFrom; // 105,

    /**
     * powerHpTo
     *
     * @var int
     */
    public ?int $powerHpTo; // 105,

    /**
     * powerKwFrom
     *
     * @var int
     */
    public ?int $powerKwFrom; // 77,

    /**
     * powerKwTo
     *
     * @var int
     */
    public ?int $powerKwTo; // 77,

    /**
     * typeName
     *
     * @var string
     */
    public ?string $typeName; // "1.2 TSI",

    /**
     * typeNumber
     *
     * @var int
     */
    public ?int $typeNumber; // 33251,

    /**
     * valves
     *
     * @var int
     */
    public ?int $valves; // 2,

    /**
     * yearOfConstrFrom
     *
     * @var int
     */
    public ?int $yearOfConstrFrom; // 201004,

    /**
     * yearOfConstrTo
     *
     * @var int
     */
    public ?int $yearOfConstrTo; // 201208,

    /**
     * rmiTypeId
     *
     * @var int
     */
    public ?int $rmiTypeId; // 63618

    /**
     * motorCodes
     *
     * @var array
     */
    public ?array $motorCodes; // ["motorCode: "BMM"]

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

    /**
     * Get ccmTech
     *
     * @return  int
     */
    public function getCcmTech()
    {
        return $this->ccmTech;
    }

    /**
     * Set ccmTech
     *
     * @param  int  $ccmTech  ccmTech
     *
     * @return  self
     */
    public function setCcmTech(int $ccmTech = null)
    {
        $this->ccmTech = $ccmTech;

        return $this;
    }

    /**
     * Get constructionType
     *
     * @return  string
     */
    public function getConstructionType()
    {
        return $this->constructionType;
    }

    /**
     * Set constructionType
     *
     * @param  string  $constructionType  constructionType
     *
     * @return  self
     */
    public function setConstructionType(string $constructionType = null)
    {
        $this->constructionType = $constructionType;

        return $this;
    }

    /**
     * Get cylinder
     *
     * @return  int
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * Set cylinder
     *
     * @param  int  $cylinder  cylinder
     *
     * @return  self
     */
    public function setCylinder(int $cylinder = null)
    {
        $this->cylinder = $cylinder;

        return $this;
    }

    /**
     * Get cylinderCapacityCcm
     *
     * @return  int
     */
    public function getCylinderCapacityCcm()
    {
        return $this->cylinderCapacityCcm;
    }

    /**
     * Set cylinderCapacityCcm
     *
     * @param  int  $cylinderCapacityCcm  cylinderCapacityCcm
     *
     * @return  self
     */
    public function setCylinderCapacityCcm(int $cylinderCapacityCcm = null)
    {
        $this->cylinderCapacityCcm = $cylinderCapacityCcm;

        return $this;
    }

    /**
     * Get cylinderCapacityLiter
     *
     * @return  int
     */
    public function getCylinderCapacityLiter()
    {
        return $this->cylinderCapacityLiter;
    }

    /**
     * Set cylinderCapacityLiter
     *
     * @param  int  $cylinderCapacityLiter  cylinderCapacityLiter
     *
     * @return  self
     */
    public function setCylinderCapacityLiter(int $cylinderCapacityLiter = null)
    {
        $this->cylinderCapacityLiter = $cylinderCapacityLiter;

        return $this;
    }

    /**
     * Get fuelType
     *
     * @return  string
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Set fuelType
     *
     * @param  string  $fuelType  fuelType
     *
     * @return  self
     */
    public function setFuelType(string $fuelType = null)
    {
        $this->fuelType = $fuelType;

        return $this;
    }

    /**
     * Get fuelTypeProcess
     *
     * @return  string
     */
    public function getFuelTypeProcess()
    {
        return $this->fuelTypeProcess;
    }

    /**
     * Set fuelTypeProcess
     *
     * @param  string  $fuelTypeProcess  fuelTypeProcess
     *
     * @return  self
     */
    public function setFuelTypeProcess(string $fuelTypeProcess = null)
    {
        $this->fuelTypeProcess = $fuelTypeProcess;

        return $this;
    }

    /**
     * Get impulsionType
     *
     * @return  string
     */
    public function getImpulsionType()
    {
        return $this->impulsionType;
    }

    /**
     * Set impulsionType
     *
     * @param  string  $impulsionType  impulsionType
     *
     * @return  self
     */
    public function setImpulsionType(string $impulsionType = null)
    {
        $this->impulsionType = $impulsionType;

        return $this;
    }

    /**
     * Get manuName
     *
     * @return  string
     */
    public function getManuName()
    {
        return $this->manuName;
    }

    /**
     * Set manuName
     *
     * @param  string  $manuName  manuName
     *
     * @return  self
     */
    public function setManuName(string $manuName = null)
    {
        $this->manuName = $manuName;

        return $this;
    }

    /**
     * Get manuId
     *
     * @return  int
     */
    public function getManuId()
    {
        return $this->manuId;
    }

    /**
     * Set manuId
     *
     * @param  int  $manuId  manuId
     *
     * @return  self
     */
    public function setManuId(int $manuId = null)
    {
        $this->manuId = $manuId;

        return $this;
    }

    /**
     * Get rmiTypeId
     *
     * @return  int
     */
    public function getRmiTypeId()
    {
        return $this->rmiTypeId;
    }

    /**
     * Set rmiTypeId
     *
     * @param  int  $rmiTypeId  rmiTypeId
     *
     * @return  self
     */
    public function setRmiTypeId(int $rmiTypeId = null)
    {
        $this->rmiTypeId = $rmiTypeId;

        return $this;
    }

    /**
     * Get yearOfConstrTo
     *
     * @return  int
     */
    public function getYearOfConstrTo()
    {
        return $this->yearOfConstrTo;
    }

    /**
     * Set yearOfConstrTo
     *
     * @param  int  $yearOfConstrTo  yearOfConstrTo
     *
     * @return  self
     */
    public function setYearOfConstrTo(int $yearOfConstrTo = null)
    {
        $this->yearOfConstrTo = $yearOfConstrTo;

        return $this;
    }

    /**
     * Get yearOfConstrFrom
     *
     * @return  int
     */
    public function getYearOfConstrFrom()
    {
        return $this->yearOfConstrFrom;
    }

    /**
     * Set yearOfConstrFrom
     *
     * @param  int  $yearOfConstrFrom  yearOfConstrFrom
     *
     * @return  self
     */
    public function setYearOfConstrFrom(int $yearOfConstrFrom = null)
    {
        $this->yearOfConstrFrom = $yearOfConstrFrom;

        return $this;
    }

    /**
     * Get valves
     *
     * @return  int
     */
    public function getValves()
    {
        return $this->valves;
    }

    /**
     * Set valves
     *
     * @param  int  $valves  valves
     *
     * @return  self
     */
    public function setValves(int $valves = null)
    {
        $this->valves = $valves;

        return $this;
    }

    /**
     * Get typeNumber
     *
     * @return  int
     */
    public function getTypeNumber()
    {
        return $this->typeNumber;
    }

    /**
     * Set typeNumber
     *
     * @param  int  $typeNumber  typeNumber
     *
     * @return  self
     */
    public function setTypeNumber(int $typeNumber = null)
    {
        $this->typeNumber = $typeNumber;

        return $this;
    }

    /**
     * Get typeName
     *
     * @return  string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set typeName
     *
     * @param  string  $typeName  typeName
     *
     * @return  self
     */
    public function setTypeName(string $typeName = null)
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * Get powerKwTo
     *
     * @return  int
     */
    public function getPowerKwTo()
    {
        return $this->powerKwTo;
    }

    /**
     * Set powerKwTo
     *
     * @param  int  $powerKwTo  powerKwTo
     *
     * @return  self
     */
    public function setPowerKwTo(int $powerKwTo = null)
    {
        $this->powerKwTo = $powerKwTo;

        return $this;
    }

    /**
     * Get powerKwFrom
     *
     * @return  int
     */
    public function getPowerKwFrom()
    {
        return $this->powerKwFrom;
    }

    /**
     * Set powerKwFrom
     *
     * @param  int  $powerKwFrom  powerKwFrom
     *
     * @return  self
     */
    public function setPowerKwFrom(int $powerKwFrom = null)
    {
        $this->powerKwFrom = $powerKwFrom;

        return $this;
    }

    /**
     * Get powerHpTo
     *
     * @return  int
     */
    public function getPowerHpTo()
    {
        return $this->powerHpTo;
    }

    /**
     * Set powerHpTo
     *
     * @param  int  $powerHpTo  powerHpTo
     *
     * @return  self
     */
    public function setPowerHpTo(int $powerHpTo = null)
    {
        $this->powerHpTo = $powerHpTo;

        return $this;
    }

    /**
     * Get powerHpFrom
     *
     * @return  int
     */
    public function getPowerHpFrom()
    {
        return $this->powerHpFrom;
    }

    /**
     * Set powerHpFrom
     *
     * @param  int  $powerHpFrom  powerHpFrom
     *
     * @return  self
     */
    public function setPowerHpFrom(int $powerHpFrom = null)
    {
        $this->powerHpFrom = $powerHpFrom;

        return $this;
    }

    /**
     * Get motorType
     *
     * @return  string
     */
    public function getMotorType()
    {
        return $this->motorType;
    }

    /**
     * Set motorType
     *
     * @param  string  $motorType  motorType
     *
     * @return  self
     */
    public function setMotorType(string $motorType = null)
    {
        $this->motorType = $motorType;

        return $this;
    }

    /**
     * Get modelName
     *
     * @return  string
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Set modelName
     *
     * @param  string  $modelName  modelName
     *
     * @return  self
     */
    public function setModelName(string $modelName = null)
    {
        $this->modelName = $modelName;

        return $this;
    }

    /**
     * Get modId
     *
     * @return  int
     */
    public function getModId()
    {
        return $this->modId;
    }

    /**
     * Set modId
     *
     * @param  int  $modId  modId
     *
     * @return  self
     */
    public function setModId(int $modId = null)
    {
        $this->modId = $modId;

        return $this;
    }

    /**
     * Get motorCodes
     *
     * @return  array
     */ 
    public function getMotorCodes()
    {
        return $this->motorCodes;
    }

    /**
     * Set motorCodes
     *
     * @param  array  $motorCodes  motorCodes
     *
     * @return  self
     */ 
    public function setMotorCodes(array $motorCodes = null)
    {
        $this->motorCodes = $motorCodes;

        return $this;
    }
}
