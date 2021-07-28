<?php

return [
    'service_url' => env('TEC_DOC_SERVICE_URL', "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint"),
    'api_key' => env('TECDOC_API_KEY'),
    'provider_id' => env('TECDOC_PROVIDER_ID'),
    'country' => 'HU',
    'lang' => 'HU',
];
//php artisan vendor:publish --provider="Composite\TecDoc\TecDocServiceProvider" --tag=config