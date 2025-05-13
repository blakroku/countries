# Blakroku Countries

A lightweight PHP package that provides country data with powerful lookup functionality.
Easily retrieve country details by name, code, domain extension, calling code, currency, and capital, all from a single source of truth.

## Installation
```bash
composer require blakroku/countries
```

## Usage

```php
use Blakroku\Countries\Countries\CountryManager;

$manager = new CountryManager();

// Get all countries
$countries = $manager->getAllCountries();

// Get country by name
$kenya = $manager->getCountryByName('Kenya');

// Get country by ISO code
$us = $manager->getCountryByCode('US');

// Get country by domain extension
$country = $manager->getCountryByDomainExtension('.fr');

// Get country by calling code
$country = $manager->getCountryByCallingCode('+49');

// Get country by currency
$country = $manager->getCountryByCurrency('EUR');

// Get country by capital
$country = $manager->getCountryByCapital('Tokyo');
```

Each lookup method returns a Country object or null if no match is found.

## Features
- Lookup by name, code, domain, currency, capital, and calling code

- Lazy-loaded from a JSON dataset

- Fast in-memory caching

- Clean and modern PHP design

- No external dependencies

## Requirements
- PHP 7.4 or higher

- Composer

## License
MIT License