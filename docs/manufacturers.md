# Manufacturers

## List manufacturers (passenger car):
```php
TecDoc::manufacturers()->all()
```

## Filter manufacturers:
#### Filter options:
```php
$filter = [
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
TecDoc::manufacturers()->filter(array $filter)
```
