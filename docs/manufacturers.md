# Manufacturers

## List manufacturers:
#### Filter options:
```php
$filter = [ // optional
    "lang" => "HU" // default is in config
    "linkingTargetType" => "P" // default is P (passenger car)
    "favouredList" => 1 // 1 or 0, popular manufacturers
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
