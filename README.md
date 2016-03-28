# Blade Helpers
Helpers for [laravel](http://laravel.com) blade template inputs.
Supports laravel 5.2

[![GitHub license](https://img.shields.io/github/license/graciano/gess.svg)](https://github.com/graciano/blade-helpers/blob/master/LICENSE)
[![Packagist](https://img.shields.io/packagist/dt/graciano/blade-helpers.svg)](https://packagist.org/packages/graciano/blade-helpers)
[![Other Badge](https://img.shields.io/badge/much%20badge-many%20fun-yellow.svg)](https://github.com/graciano/blade-helpers)
[![GitHub release](https://img.shields.io/github/release/graciano/blade-helpers.svg)](https://github.com/graciano/blade-helpers/releases)


## Usage
  ```html
    <input type="text" name='name' value="{{ input_value($obj, 'name') }}" />
    <!-- this will call $obj->{name} for the value, if none is found (or the obj is null), old('name') will be displayed -->
  ```
  Or, if you have a checkbox:
  ```html
    <input type="checlbox" name='accept' {{ input_checked($obj, 'accepted') }} />
    <!-- this will print checked if the obj->accepted (or the old input) is anything but false/null -->
  ```

## Install
  First, require the project with [composer](http://getcomposer.org): `$ composer require graciano/blade-helpers`

  Add the file in your composer.json files section, like this:
  ```json
  "autoload": {
          "files":[
            "vendor/graciano/blade-helpers/src/helpers.php"
          ],
      }
  ```

## License

  This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
