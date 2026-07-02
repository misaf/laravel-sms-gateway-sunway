<?php

declare(strict_types=1);

namespace Misaf\LaravelSmsGatewaySunway\Drivers;

use Illuminate\Http\Client\PendingRequest;
use Misaf\LaravelSmsGateway\SmsGatewayDriver;

final class SunwayDriver extends SmsGatewayDriver
{
    protected function driverName(): string
    {
        return 'sunway';
    }

    protected function defaultGateway(): string
    {
        return 'https://sms.sunwaysms.com/smsws/HttpService.ashx';
    }

    protected function configureRequest(PendingRequest $request): PendingRequest
    {
        return $request->withQueryParameters([
            'UserName' => $this->serviceConfigString('username'),
            'Password' => $this->serviceConfigString('password'),
        ]);
    }
}
