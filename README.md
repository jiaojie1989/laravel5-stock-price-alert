Stock price alert component for Laravel 5
===
[![Latest Stable Version](https://poser.pugx.org/jiaojie/laravel5-stock-price-alert/v/stable.svg)](https://packagist.org/packages/jiaojie/laravel5-stock-price-alert) [![Total Downloads](https://poser.pugx.org/jiaojie/laravel5-stock-price-alert/downloads.svg)](https://packagist.org/packages/jiaojie/laravel5-stock-price-alert) [![Latest Unstable Version](https://poser.pugx.org/jiaojie/laravel5-stock-price-alert/v/unstable.svg)](https://packagist.org/packages/jiaojie/laravel5-stock-price-alert) [![License](https://poser.pugx.org/jiaojie/laravel5-stock-price-alert/license.svg)](https://packagist.org/packages/jiaojie/laravel5-stock-price-alert)
## Requirements

- Redis Server >= 3.0
- PHP Version >= 5.4

## Usage

Add to your `config/database.php`
```php
'redis' => [
        'options' => [
            "profile" => new \Jiaojie\Laravel\StockAlert\Predis\Profile(),
        ],
    ],
```