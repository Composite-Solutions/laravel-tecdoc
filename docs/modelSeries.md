# Model Series

## Filter model series:

#### Filter options:
```php
$filter = [
    "lang" => "HU", // default is in config file
    "linkingTargetType" => "P", // default is P (passenger car)
    "manuId" => 5 // Required, manufacturer ID
]
```
#### Linking target type string options:
- P: Passenger car
- O: Commercial vehicle
- A: Axles

```php
TecDoc::modelSeries()->filter(array $filter);
```
