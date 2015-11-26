# Blade Helpers
Helpers for [laravel](http://laravel.com) blade template inputs.

## Usage
  ```html
    <input type="text" name='name' value="{{ input_value($obj, 'name') }}" />
    <!-- this will call $obj->{name} for the value, if none is found (or the obj is null), old('name') will be displayed -->
  ```

## Install
  First, require the project with [composer](http://getcomposer.org): `$ composer require graciano/blade-helpers dev-master`

  Add our ServiceProvider in `config/app.php`
  ```php
  'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
        //...

        Graciano\BladeHelpersServiceProvider::class,
        /...
      ],
  ```

  Run `$ php artisan vendor:publish`

  Add the file in your composer.json files section, like this:
  ```json
  "autoload": {
          "files": [
              "app/helpers.php"
          ]
      }
  ```

## License

  This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
