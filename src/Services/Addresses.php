<?php

namespace Composite\TecDoc\Services;

use Composite\TecDoc\Facades\TecDoc;
use Illuminate\Support\Facades\Config;

class Addresses
{
        
    /**
     * Add dynamic IP address to access TecDoc data temporarily
     *
     * @param  string $address
     * @return string
     */
    public function add(string $address, int $validityHours = null)
    {
        $response = TecDoc::post('', $this->createAddDynamicAddressPayload($address, $validityHours));
        return $response;
    }
    
    /**
     * Create add dynamic IP address request payload for API calls
     *
     * @param  string $address
     * @param  int $validityHours
     * @return array
     */
    public function createAddDynamicAddressPayload(string $address, int $validityHours = null)
    {
        return [
            "addDynamicAddress" => [
                "address" => $address,
                "lang" => "HU",
                "validityHours" => $validityHours ?? 1,
                'provider' =>  Config::get('tecdoc.provider_id')
            ]
        ];
    }
}
