<?php

declare(strict_types=1);

namespace Misaf\LaravelSmsGatewaySunway\Tests;

use Illuminate\Support\Facades\Http;
use Misaf\LaravelSmsGateway\SmsGatewayServiceProvider;
use Misaf\LaravelSmsGatewaySunway\SunwaySmsGatewayServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Override;

abstract class TestCase extends TestbenchTestCase
{
    #[Override]
    protected function setUp(): void
    {
        parent::setUp();

        Http::preventStrayRequests();
    }

    protected function getPackageProviders($app): array
    {
        return [
            SmsGatewayServiceProvider::class,
            SunwaySmsGatewayServiceProvider::class,
        ];
    }
}
