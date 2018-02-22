
laravel5-playsmsws
===============
Laravel 5 PlaySMS API Integration

## Installation

### Install Package

```
composer require kataklys/laravel5-sms-api
```
### Add Service Provider & Facade

#### For Laravel 5.5+
Once the package is added, the service provider and facade will be autodiscovered.

#### For Laravel <=5.4
Add the ServiceProvider to the providers array in `config/app.php`:
```
kataklys\Playsmsws\PlaysmswsServiceProvider::class,
```

Add the Facade to the aliases array in `config/app.php`:
```
'Playsmsws': kataklys\Playsmsws\Facades\PlaysmswsFacade::class,
```

### Publish Config
Once done, publish the config to your config folder using:
```
php artisan vendor:publish --provider="kataklys\Playsmsws\PlaysmswsServiceProvider"
```

## Configuration
Once the config file is published, open `config/playsmsws.php`

#### URL
FIXME
#### Username
FIXME
#### Token
FIXME

## Usage
FIXME
