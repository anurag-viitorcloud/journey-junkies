<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ZapierService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function sendZapierRequest($data)
    {

        
        $response = $this->client->post('api/endpoint', [
            'json' => $data,
        ]);

        

        

        dd($response);
        return $response->getBody()->getContents();
    }
}
