<?php

return [

    /*
    |--------------------------------------------------------------------------
    | TecDoc service url
    |--------------------------------------------------------------------------
    |
    | The service url of TecDoc REST API
    |
    */

    'service_url' => env('TEC_DOC_SERVICE_URL', "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint"),

    /*
    |--------------------------------------------------------------------------
    | API key
    |--------------------------------------------------------------------------
    |
    | The user's API key for TecDoc REST API service
    |
    */

    'api_key' => env('TECDOC_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Provider ID
    |--------------------------------------------------------------------------
    |
    | The user's provider ID for TecDoc REST API service
    |
    */

    'provider_id' => env('TECDOC_PROVIDER_ID'),

    /*
    |--------------------------------------------------------------------------
    | Country code (ISO 3166)
    |--------------------------------------------------------------------------
    |
    | The user's registered country code (Country code according to ISO 3166)
    |
    */

    'country' => env('TECDOC_COUNTRY'),

    /*
    |--------------------------------------------------------------------------
    | Language code (ISO 639)
    |--------------------------------------------------------------------------
    |
    | Chosen language code for response (Language code according to ISO 639)
    |
    */

    'lang' => env('TECDOC_LANG'),

];
