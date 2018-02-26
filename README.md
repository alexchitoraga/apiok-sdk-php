# OK SDK PHP

OK SDK PHP is a **PHP wrapper** providing an easier way
to make API call using OKSDK REST methods.

## Requirements

- PHP >= 5.4

## Composer Installation

The best way to install Intervention Image is quickly and easily 
with [Composer](http://getcomposer.org).

Now your composer.json has been updated automatically and you're able 
to require the just created vendor/autoload.php file to PSR-4 autoload 
the library.

The next step is to decide, if you want to integrate APIOK SDK into the 
Laravel framework. If you want to use the library with Laravel, 
just skip the following step and continue with the description 
of Laravel Integration.

## Usage

APIOK SDK doesn't require Laravel or any other framework at all. 
If you want to use it as is, you just have to require the composer 
autoload file to instatiate image objects as shown in the 
following example.

```php 
// include composer autoload
require 'vendor/autoload.php';

// import the Alexchitoraga APIOK Class
use Alexchitoraga\Apiok\Apiok;

// create an APIOK instance with custom app configs
$apiok = new Apiok([
    'application_key' => '***',
    'session_key' => '***',
    'access_token' => '***',
    'secret_key' => '***',
]);

// Call OKSDK API method
// Methods must be converted by next principle:
// users.getInfo => usersGetInfo
// messagesV2.sendGameInvite => messagev2SendGameInvite
$apiok->usersGetInfo($params);
```

## Integration in Laravel

APIOK has optional support for Laravel and comes with a 
Service Provider and Facades for easy integration. 
The vendor/autoload.php is included by Laravel, so you don't have to 
require or autoload manually. Just see the instructions below.

After you have installed APIOK, open your Laravel config file 
config/app.php and add the following lines.

In the $providers array add the service providers for this package.

```php
Alexchitoraga\Apiok\ApiokServiceProvider::class
```

Add the facade of this package to the $aliases array.

```php
'Apiok' => Alexchitoraga\Apiok\Facades\Apiok::class
```

Now the Apiok Class will be auto-loaded by Laravel.

### Configuration

APIOK hasn't default configurations as each OK application has 
it's own configuration. To set configuration you
have to add new service in config/services.php file.

```php
'apiok' => {
    'application_key' => env('APPLICATION_KEY'),
    'session_key' => env('SESSION_KEY'),
    'access_token' => env('ACCESS_TOKEN'),
    'secret_key' => env('SECRET_KEY'),
],
```

### Testing

Tests are stored in **/tests** folder. There are two tests which are disabled. 
To run them you must modify phpunit.xml php constansts by configuration
from your applications. Also you must to prefix this two tests with 
keyword "test".