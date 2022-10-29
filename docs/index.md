# Php library for Qvapay API

![Banner](https://banners.beyondco.de/QvaPay%20SDK.png?theme=dark&packageManager=composer+require&packageName=ynievespuntonetsurl%2Fqvapay-sdk-php&pattern=autumn&style=style_2&description=This+PHP+library+facilitates+the+integration+of+the+QvaPay+API.&md=1&showWatermark=0&fontSize=125px&images=https%3A%2F%2Fwww.php.net%2Fimages%2Flogos%2Fnew-php-logo.svg&widths=auto)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ynievespuntonetsurl/qvapay-sdk-php.svg?style=flat)](https://packagist.org/packages/ynievespuntonetsurl/qvapay-sdk-php)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)
![Tests](https://github.com/ynievespuntonetsurl/qvapay-sdk-php/workflows/Tests/badge.svg)
![Check & fix styling](https://img.shields.io/github/workflow/status/ynievespuntonetsurl/qvapay-sdk-php/Check%20&%20fix%20styling?label=code%20style)
[![Total Downloads](https://img.shields.io/packagist/dt/ynievespuntonetsurl/qvapay-sdk-php.svg?style=flat)](https://packagist.org/packages/ynievespuntonetsurl/qvapay-sdk-php)

This PHP library facilitates the integration of the Qvapay API.

## Sign up on QvaPay

Create your account to process payments through QvaPay at [https://qvapay.com/register](https://qvapay.com/register/ynievespuntonet).

### Requirements

- PHP version >= 7.3
- Composer

## Installation

You can install the package via composer:

```bash
composer require ynievespuntonetsurl/qvapay-sdk-php
```

## Usage
- First, import the Client class and create your QvaPay client using your app credentials.

```php
require_once __DIR__ . '/vendor/autoload.php';

use  Qvapay\Client;
try {
    $qvapay = new Client([
        'app_id' => 'XXX', 
        'app_secret' => 'XXX',
        'version' => '1'
    ]);
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

- Get your app info

```php
try {
    print_r($qvapay->info());
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

- Create an invoice

```php
try {
    $invoice = $qvapay->create_invoice([
        'amount' => 10,
        'description' => 'Ebook',
        'remote_id' => 'EE-BOOk-123' # example remote invoice id
    ]);
    print_r($invoice);
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

- Get transactions

```php
try {
    print_r($qvapay->transactions());
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

- Get transaction

```php
try {
    print_r($qvapay->get_transaction($uuid));
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

- Get your account balance

```php
try {
    echo $qvapay->balance();
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

You can also read the QvaPay API documentation: [https://qvapay.com/docs](https://qvapay.com/docs).

## Testing

```bash
composer test
```
