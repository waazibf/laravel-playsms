laravel-playsms
===============
Laravel 9 PlaySMS API Integration

## Installation

### Install Package
```
composer require waazibf/laravel-playsmsws
```      
### Add Service Provider & Facade

#### For Laravel 5.5+
Once the package is added, the service provider and facade will be autodiscovered.

#### For Laravel <=5.4
Add the ServiceProvider to the providers array in `config/app.php`:
```
waazibf\Playsmsws\PlaysmswsServiceProvider::class,
```

Add the Facade to the aliases array in `config/app.php`:
```
'Playsmsws': waazibf\Playsmsws\Facades\PlaysmswsFacade::class,
```

### Publish Config
Once done, publish the config to your config folder using:
```
php artisan vendor:publish --provider="waazibf\Playsmsws\PlaysmswsServiceProvider"
```

## Configuration
Once the config file is published, open `config/playsmsws.php` and set your desired values for the parameters:

#### URL
Your PlaySMS WebServices URL.

#### Username
Your PlaySMS WebServices Username.

#### Token
Your PlaySMS WebServices Token.

## Usage
FIXME
