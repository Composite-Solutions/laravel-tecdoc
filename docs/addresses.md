# Addresses

## Add dynamic address to TecDoc server

If you would like to give the access to the user to access resources from TecDoc without any kind of access key, you can add IP address to grant temporary access to resources (eg. thumbnails)


#### options:
- address: IP address of client
- (optional) validityHours: hours to grant access (1-24), default is 1


```php
TecDoc::addresses()->add(string $address, int $validityHours = null);
```