# Blade Helpers
Helpers for [laravel](http://laravel.com) blade template inputs.

## Usage
  ```html
    <input type="text" name='name' value="{{ input_value($obj, 'name') }}" />
    <!-- this will call $obj->{name} for the value, if none is found (or the obj is null), old('name') will be displayed -->
  ```

## Install
  First, require the project with [composer](http://getcomposer.org): `$ composer require graciano/blade-helpers dev-master`

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
