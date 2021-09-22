# Vehicles

## Get car IDs by criteria

#### Filter options:
```php
$filter = [
    "carType" => "P",  // default is P (passenger car)
    "lang" => "HU",  // default is in config file
    "manuId" => 5, // Required, manufacturer ID
    "modId" => 4955 // Required, model ID
]
```
#### Car type string options:
- P: Passenger car
- O: Commercial vehicle
- L: Light commercial vehicle

```php
TecDoc::vehicles()->ids(array $filter);
```

## Filter vehicles by carIds:

#### Filter options:
```php
$filter = [
    "lang" => "HU", // default is in config file
    "carIds" => [   // Required, carIDs
        4086,
        33014,
        26582,
        18069
    ]
]
```

```php
TecDoc::vehicles()->filter(array $filter);
```
