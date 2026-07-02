# Laravel SMS Gateway Sunway Driver

Sunway SMS gateway driver for [`misaf/laravel-sms-gateway`](https://github.com/misaf/laravel-sms-gateway).

## Installation

```bash
composer require misaf/laravel-sms-gateway-sunway
```

Laravel package discovery registers the driver service provider automatically.

## Configuration

```env
SMS_GATEWAY_DRIVER=sunway
SMS_GATEWAY_SUNWAY_USERNAME=your-username
SMS_GATEWAY_SUNWAY_PASSWORD=your-password
```

```php
// config/services.php
'sunway' => [
    'username' => env('SMS_GATEWAY_SUNWAY_USERNAME'),
    'password' => env('SMS_GATEWAY_SUNWAY_PASSWORD'),
],
```

## Usage

```php
use Misaf\LaravelSmsGateway\Facade\SmsGateway;

$response = SmsGateway::driver('sunway')->send([
    'to'      => '09123456789',
    'message' => 'Hello',
]);
```

The payload is passed directly to Sunway, so use the fields expected by the Sunway API.

Use `request()` when you need direct access to Laravel's HTTP client:

```php
$request = SmsGateway::driver('sunway')->request();
```

## Testing

```bash
composer test
composer analyse
```

## License

MIT
