<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class ZapierServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Client::class, function ($app) {
            return new Client([
                'base_uri' => 'https://zapier.com/', // Replace with the Zapier API base URL
                'headers' => [
                    'Authorization' => 'Bearer sk-ak-8mgoJX9PSpLbDxJEQyB2ZR6iTD', // Replace with your Zapier API key
                ],
            ]);
        });
    }

}
