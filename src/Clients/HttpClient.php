<?php

namespace Fatkulnurk\BillerSdk\Clients;

use Fatkulnurk\BillerSdk\ProductConfig;

class HttpClient
{
    public static function request(): \Illuminate\Http\Client\PendingRequest
    {
        return \Illuminate\Support\Facades\Http::asJson()
            ->withoutVerifying()
            ->timeout(600)
            ->connectTimeout(600)
            ->withToken(ProductConfig::getInstance()->getToken());
    }
}