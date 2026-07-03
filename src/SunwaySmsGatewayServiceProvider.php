<?php

declare(strict_types=1);

namespace Misaf\LaravelSmsGatewaySunway;

use Illuminate\Contracts\Foundation\Application;
use Misaf\LaravelSmsGateway\SmsGatewayManager;
use Misaf\LaravelSmsGatewaySunway\Drivers\SunwayDriver;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class SunwaySmsGatewayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-sms-gateway-sunway');
    }

    public function packageRegistered(): void
    {
        $this->app->afterResolving(SmsGatewayManager::class, function (SmsGatewayManager $manager, Application $app): void {
            $manager->extend('sunway', fn(): SunwayDriver => $app->make(SunwayDriver::class));
        });

        if ($this->app->bound('sms-gateway')) {
            $this->app->make('sms-gateway')->extend('sunway', fn(Application $app): SunwayDriver => $app->make(SunwayDriver::class));
        }
    }
}
