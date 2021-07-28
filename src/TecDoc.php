<?php

namespace Composite\TecDoc;

use Composite\TecDoc\Traits\Services;

class TecDoc
{
    use Services;

    /**
     * @var \Composite\TecDoc\Gateway
     */
    private $gateway;

    /**
     * @param  \Composite\TecDoc\Gateway  $gateway
     */
    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @return \Composite\TecDoc\Gateway
     */
    public function gateway(): Gateway
    {
        return $this->gateway;
    }

    /**
     * @param  string  $uri
     * @param  array  $payload
     *
     * @return array
     */
    public function get(string $uri, array $payload = []): array
    {
        return $this->gateway->get($uri, $payload);
    }

    /**
     * @param  string  $uri
     * @param  array  $payload
     *
     * @return array
     */
    public function post(string $uri, array $payload = []): array
    {
        return $this->gateway->post($uri, $payload);
    }

    /**
     * @param  string  $uri
     * @param  array  $payload
     *
     * @return array
     */
    public function put(string $uri, array $payload = []): array
    {
        return $this->gateway->put($uri, $payload);
    }

    /**
     * @param  string  $uri
     * @param  array  $payload
     *
     * @return array
     */
    public function delete(string $uri, array $payload = []): array
    {
        return $this->gateway->delete($uri, $payload);
    }
}