# Vehicles

## Get vehicles by carId:

#### Filter options:
```php
$filter = [ // optional
    "lang" => "HU", // default is in config file
]
```

```php
TecDoc::vehicles()->filter(int $carId, array $filter = null);
```
## Get vehicles by manuId and modId

#### Filter options:
```php
$filter = [ // optional
    "carType" => "P",  // default is P (passenger car)
    "lang" => "HU",  // default is in config file
]
```
#### Car type string options:
- P: Passenger car
- O: Commercial vehicle
- L: Light commercial vehicle

```php
TecDoc::vehicles()->findByNumber(int $manuId, int $modId, array $filter = null);
```

