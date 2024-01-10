# This is my package wasabi

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pratikkuikel/wasabi.svg?style=flat-square)](https://packagist.org/packages/pratikkuikel/wasabi)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/pratikkuikel/wasabi/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/pratikkuikel/wasabi/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/pratikkuikel/wasabi/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/pratikkuikel/wasabi/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/pratikkuikel/wasabi.svg?style=flat-square)](https://packagist.org/packages/pratikkuikel/wasabi)

This package converts the level one json field attributes to the attributes of the model whenever the data is retrieved from the database using eloquent. It works only on retrieval.

## Installation

You can install the package via composer:

```bash
composer require pratikkuikel/wasabi
```

## Usage

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pratikkuikel\Wasabi\Traits\Wasabi;

class State extends Model
{
    use HasFactory;
    use Wasabi;

    protected $guarded = [];

    protected $casts = [
        'data' => 'array'
    ];

    // OR
    protected $casts = [
        'custom_field' => 'array'
    ];

    // Override the default dataField with any other preferred name
    // you don't need to define the constructor to use the default `data` field
    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);
    //     self::setDataField('custom_field');
    // }
}

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

-   [pratik kuikel](https://github.com/pratikkuikel)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
