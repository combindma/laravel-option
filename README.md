# A key-value storage for laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/combindma/laravel-option.svg?style=flat-square)](https://packagist.org/packages/combindma/laravel-option)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/combindma/laravel-option/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/combindma/laravel-option/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/combindma/laravel-option/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/combindma/laravel-option/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/combindma/laravel-option.svg?style=flat-square)](https://packagist.org/packages/combindma/laravel-option)

This package uses [spatie valuestore](https://github.com/spatie/valuestore) under the hood. 
## About Combind Agency

[Combine Agency](https://combind.ma?utm_source=github&utm_medium=banner&utm_campaign=package_name) is a leading web development agency specializing in building innovative and high-performance web applications using modern technologies. Our experienced team of developers, designers, and project managers is dedicated to providing top-notch services tailored to the unique needs of our clients.

If you need assistance with your next project or would like to discuss a custom solution, please feel free to [contact us](mailto:hello@combind.ma) or visit our [website](https://combind.ma?utm_source=github&utm_medium=banner&utm_campaign=package_name) for more information about our services. Let's build something amazing together!


## Installation

You can install the package via composer:

```bash
composer require combindma/laravel-option
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-option-config"
```

This is the contents of the published config file:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Default disk
    |--------------------------------------------------------------------------
    |
    | This is the default disk that will be used to store the options file.
    |
    */

    'disk' => 'local',
    /*
    |--------------------------------------------------------------------------
    | Default filename
    |--------------------------------------------------------------------------
    |
    | This is the default filename for the options file.
    |
    */

    'filename' => 'options.json',
];
```

## Usage
This package makes it easy to store and retrieve some loose values. Stored values are saved as a json file. 

It can be used like this:

```php
option()->put('key', 'value');

option()->get('key'); // Returns 'value'

option()->has('key'); // Returns true

// Specify a default value for when the specified key does not exist
option()->get('non existing key', 'default') // Returns 'default'

option()->put('anotherKey', 'anotherValue');

// Put multiple items in one go
option()->put(['ringo' => 'drums', 'paul' => 'bass']);

option()->all(); // Returns an array with all items

option()->forget('key'); // Removes the item

option()->flush(); // Empty the entire options

option()->flushStartingWith('somekey'); // remove all items whose keys start with "somekey"

option()->increment('number'); // option()->get('number') will return 1 
option()->increment('number'); // option()->get('number') will return 2
option()->increment('number', 3); // option()->get('number') will return 5

// Option implements ArrayAccess
option()['key'] = 'value';
option()['key']; // Returns 'value'
isset(option()['key']); // Return true
unset(option()['key']); // Equivalent to removing the value
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Combind](https://github.com/combindma)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
