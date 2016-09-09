Stock price alert component for Laravel 5
===
## Requirements

-- Redis Server >= 3.0
-- PHP Version >= 5.4

## Usage

Add to your `config/database.php`
```php
'redis' => [
        'options' => [
            "profile" => new \Jiaojie\Laravel\StockAlert\Predis\Profile(),
        ],
    ],
```