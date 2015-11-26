# Blade Helpers
Helpers for laravel blade template inputs.


## Install
  First, require the project with [composer](http://getcomposer.org): `$ composer require graciano/blade-helpers`

  Add the file in your composer.json files section, like this:
  ```json
  "autoload": {
          "files": [
              "vendor/Graciano/helpers.php"
          ]
      }
  ```
  Then load it at the bottom of app\start\global.php as follows.
  ```php
  // at the bottom of the file
  require app_path().'/helpers.php';
  ```
  Then, run `$ composer dump-autoload`

## License

  This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
