<?php

declare(strict_types=1);

namespace Misaf\LaravelSmsGatewaySunway;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Misaf\LaravelSmsGateway\SmsGatewayManager;
use Misaf\LaravelSmsGatewaySunway\Drivers\SunwayDriver;

final class SunwaySmsGatewayServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(SmsGatewayManager::class, function (SmsGatewayManager $manager): void {
            $manager->extend('sunway', fn(Application $app): SunwayDriver => $app->make(SunwayDriver::class));
        });
    }
}
