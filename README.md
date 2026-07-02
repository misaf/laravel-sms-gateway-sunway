# Laravel SMS Gateway Sunway Driver

Sunway driver package for [`misaf/laravel-sms-gateway`](https://github.com/misaf/laravel-sms-gateway).

## Installation

```bash
composer require misaf/laravel-sms-gateway misaf/laravel-sms-gateway-sunway
```

Laravel package discovery registers `Misaf\LaravelSmsGatewaySunway\SunwaySmsGatewayServiceProvider` automatically.

## Usage

Set the default driver when this provider should be used by default:

```env
SMS_GATEWAY_DRIVER=sunway
```

Then configure the provider credentials in `config/services.php` and use the shared facade:

```php
use Misaf\LaravelSmsGateway\Facade\SmsGateway;

SmsGateway::driver('sunway')->request();
```

## Testing

```bash
composer test
composer analyse
```

## License

MIT