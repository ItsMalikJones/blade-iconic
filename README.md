<p align="center">
    <img src="https://repository-images.githubusercontent.com/366932039/374f5b00-b382-11eb-9ac3-355a78d79852" width="1280" title="Social Card Blade Iconic">
</p>

# Blade Iconic

[![run-tests](https://github.com/ItsMalikJones/blade-iconic/actions/workflows/run-tests.yml/badge.svg)](https://github.com/ItsMalikJones/blade-iconic/actions/workflows/run-tests.yml)
<a href="https://packagist.org/packages/ItsMalikJones/blade-iconic">
    <img src="https://img.shields.io/packagist/v/ItsMalikJones/blade-iconic" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/ItsMalikJones/blade-iconic">
    <img src="https://img.shields.io/packagist/dt/ItsMalikJones/blade-iconic" alt="Total Downloads">
</a>

A package to easily make use of [Iconic](https://iconic.app/) icons in your Laravel Blade views.

For a full list of available icons see [the SVG directory](./resources/svg). Iconic icons are originally developed by [Make Lemonade](https://makelemonade.wtf/).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require itsmalikjones/blade-iconic
```

## Blade Icons

Blade Iconic uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Iconic also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-iconic.php` config file:

```bash
php artisan vendor:publish --tag=blade-iconic-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-iconic-star/>
```

You can also pass classes to your icon components:

```blade
<x-iconic-star class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-iconic-star style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-iconic --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-iconic/star.svg') }}" width="10" height="10"/>
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Maintainers

Blade Iconic is developed and maintained by [Malik Alleyne-Jones](https://twitter.com/ItsMalikJones).

## License

Blade Iconic is open-sourced software licensed under [the MIT license](LICENSE.md).
