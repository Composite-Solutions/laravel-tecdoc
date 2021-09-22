# Manufacturers

## List manufacturers:
#### Filter options:
```php
$filter = [ // optional
    "lang" => "HU" // default is in config
    "linkingTargetType" => "P" // default is P (passenger car)
]
```
#### Linking target type string options:
- P: Passenger car
- O: Commercial vehicle
- A: Axles
- M: Motor

```php
TecDoc::manufacturers()->all(array $filter = null);
```
