# Model Series

## Filter model series:

#### Filter options:
```php
$filter = [ // optional
    "lang" => "HU", // default is in config file
    "linkingTargetType" => "P", // default is P (passenger car)
]
```
#### Linking target type string options:
- P: Passenger car
- O: Commercial vehicle
- A: Axles

```php
TecDoc::modelSeries()->findByNumber(int $manuId, array $filter = null);
```
