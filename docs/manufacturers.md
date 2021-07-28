# Manufacturers

## List manufacturers (passenger car):
```php
\TecDoc::manufacturers()->all()
```

## Filter manufacturers by linking target type:

#### Linking target type string options:
- P: Passenger car
- O: Commercial vehicle
- A: Axles
- M: Motor

```php
\TecDoc::manufacturers()->filter(string $linkingTargetType)
```
