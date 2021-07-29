# Articles

## Get article IDs with state

#### Filter options:
```php
$filter = [
"lang" => "HU",  // default is in config file
"linkingTargetId" => 26582, // Required (carId / motor id)
"linkingTargetType" => "P",  // default is P (passenger car)
"sort" => 1 // 1: by brand name, 2: by generic article name
"barandNo" => [
        5,
        347,
        432
    ]
]
    
```
#### linkingTargetType options:
- P: Passenger car
- O: Commercial vehicle
- L: Light commercial vehicle
- M: Motor
- A: Axles
- K: Body type
- U: Universal
#### sort options:
- 1: Sort by brand name
- 2: Sort by generic article name

```php
\TecDoc::articles()->ids(array $filter)
```
## Find article by articleId

#### Filter options:
```php
// Optional
$filter = [
    'lang' => 'HU',
    'attributs' => true,
    'basicData' => true,
    'documents' => true,
    'eanNumbers' => true,
    'immediateAttributs' => true,
    'immediateInfo' => true,
    'info' => true,
    'mainArticles' => true,
    'normalAustauschPrice' => false,
    'oeNumbers' => true,
    'prices' => true,
    'replacedByNumbers' => true,
    'replacedNumbers' => true,
    'thumbnails' => true,
    'usageNumbers' => true,
]
    
```
```php
\TecDoc::articles()->find(int $articleId, array $filter = null)
```