![PHP version][ico-php-version]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Tests][ico-tests]][link-tests]
[![Total Downloads][ico-downloads]][link-downloads]


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




[ico-php-version]: https://img.shields.io/packagist/dependency-v/budgetlens/laravel-buckaroo-sdk/php.svg?style=flat-square
[ico-version]: https://img.shields.io/packagist/v/budgetlens/laravel-buckaroo-sdk.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-tests]: https://github.com/123lens/laravel-buckaroo-sdk/actions/workflows/tests.yml/badge.svg
[ico-downloads]: https://img.shields.io/packagist/dt/budgetlens/laravel-buckaroo-sdk.svg?style=flat-square
[link-author]: https://github.com/avido
[link-contributors]: https://github.com/123lens/laravel-buckaroo-sdk/graphs/contributors
[link-packagist]: https://packagist.org/packages/budgetlens/laravel-buckaroo-sdk
[link-tests]: https://github.com/123lens/laravel-buckaroo-sdk/actions/workflows/tests.yml?query=workflow%3Atests
[link-downloads]: https://packagist.org/packages/budgetlens/laravel-buckaroo-sdk
