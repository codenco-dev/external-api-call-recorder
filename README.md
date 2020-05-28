# Save each external API call to check if all are allright

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codenco-dev/external-api-call-recorder.svg?style=flat-square)](https://packagist.org/packages/codenco-dev/external-api-call-recorder)
[![Build Status](https://img.shields.io/travis/codenco-dev/external-api-call-recorder/master.svg?style=flat-square)](https://travis-ci.org/codenco-dev/external-api-call-recorder)
[![Quality Score](https://img.shields.io/scrutinizer/g/codenco-dev/external-api-call-recorder.svg?style=flat-square)](https://scrutinizer-ci.com/g/codenco-dev/external-api-call-recorder)
[![Total Downloads](https://img.shields.io/packagist/dt/codenco-dev/external-api-call-recorder.svg?style=flat-square)](https://packagist.org/packages/codenco-dev/external-api-call-recorder)

This package allows to record each call of external API, with payload in and payload out, to check the lasted call.
## Installation

You can install the package via composer:

```bash
composer require codenco-dev/external-api-call-recorder
```

## Usage

``` php
    use ... ;
    $result = Http::get('http://externalapi.com/stuff', [
                ...
    ]);
    $result->throw();
    event(new ExternalApiCalled($result));
```

### Testing

``` bash
php artisan test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dthomas@codenco.io instead of using the issue tracker.

## Credits

- [Dominic THOMAS](https://github.com/codenco-dev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).