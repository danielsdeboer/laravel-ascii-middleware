[![Build Status](https://travis-ci.org/danielsdeboer/laravel-ascii-middleware.svg?branch=master)](https://travis-ci.org/danielsdeboer/laravel-ascii-middleware)

## Overview

Transform user input to ASCII with this middleware. Useful in dealing with legacy components where UTF-8 may break things.

### Installation

Via Composer:

```
composer require aviator/laravel-ascii-middleware
```

### Testing

Via Composer:

```
composer test
```

### Usage

Use like [any other middleware](https://laravel.com/docs/master/middleware). You can register it if you like or just call it by class name:

```php
public function __construct ()
{
    $this->middleware(LaravelAsciiMiddleware::class);
}
```
