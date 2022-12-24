# Laravel Buckaroo SDK Wrapper

[Buckaroo Documentation](https://docs.buckaroo.io/)

This is a laravel wrapper for the [Buckaroo SDK](https://github.com/buckaroo-it/BuckarooSDK_PHP)

## Installation

Install package using composer

``` bash
composer require budgetlens/laravel-buckaroo-sdk
```

## Getting started

Update `.env` file with 
- BUCKAROO_WEBSITE_KEY
- BUCKAROO_SECRET_KEY
- BUCKAROO_TEST_MODE

If you wish you can publish the configuration.

``` bash
php artisan vendor:publish --provider="Budgetlens\Budgetlens\LaravelBuckaroo\ServiceProvider"

```

# Examples

## Get Ideal Issuers
```php
    $issuers = Buckaroo::method('iDeal')->issuers();
    ddd($issuers);
```

## Testing
Run the tests with:

``` bash
$ composer test
```

## Credits

- [Sebastiaan Blaas][link-author]
- [All Contributors][link-contributors]

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/avido
[link-contributors]: https://github.com/123lens/laravel-buckaroo-sdk/graphs/contributors
