# Listing IP Address

[![Latest Version on Packagist](https://img.shields.io/packagist/v/enkuldes/listing-ip-address.svg?style=flat-square)](https://packagist.org/packages/enkuldes/listing-ip-address)
[![Total Downloads](https://img.shields.io/packagist/dt/enkuldes/listing-ip-address.svg?style=flat-square)](https://packagist.org/packages/enkuldes/listing-ip-address)
![GitHub Actions](https://github.com/enkuldes/listing-ip-address/actions/workflows/main.yml/badge.svg)

This is my very first package that I have to publish. The basic function is to whatever check IP Address of client is being blacklist/whitelist to access the page. 

## Installation

You can install the package via composer:

```bash
composer require enkuldes/listing-ip-address
```

Export the config file with:
```bash
php artisan vendor:publish --provider="EnKuldes\ListingIPAddress\ListingIPAddressServiceProvider" 
```

And after that add this following line on `.ENV` file:

```bash
# List of IP Address separated by comma (,)
LIST_IP=192.168.0.5,10.194.17.10,127.0.0.1
# How middleware React to List of IP. Either blacklist or whitelist. Default BlackList.
BEHAVIOR=whitelist
```

## Usage

Add middleware to route file, example:

```php
// Add middleware to single route
Route::get('/', 'HomeController@index')->middleware('listing-ip-address');
// Add middleware to group route
Route::middleware(['listing-ip-address'])->group(function () {
	Route::get('/', 'HomeController@index');
};
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email fahmuzaki@gmail.com instead of using the issue tracker.

## Credits

-   [Farhan Almas Hafiz Muzaki](https://github.com/enkuldes)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
