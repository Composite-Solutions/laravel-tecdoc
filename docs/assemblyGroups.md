# Assembly groups

## Find assembly groups by linking target type, and linking target id

#### linkingTargetId can be:
- MotorID,
- CarId,
- linkingTargetId

The Linking Target Id can be the id that has linking options from other request's responses.

#### linkingTargetType options (optional, default: "P"):
- P: Passenger car, (default)
- O: Commercial vehicle,
- M: Motor,
- A: Axles,
- K: Body type,
- U: Universal

#### Filter options:
```php
// Optional
$filter = [
    'lang' => 'HU', // default: config file
    'childNodes' => true, // default: true
    'linked' => true, // default: true
]
```

```php
TecDoc::assemblyGroups()->filter(int $linkingTargetId, string $linkingTargetType = null, array $filter = null);
```