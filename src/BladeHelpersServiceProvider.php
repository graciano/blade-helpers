<?php
namespace Graciano;

use Illuminate\Support\ServiceProvider;

class BladeHelpersServiceProvider extends ServiceProvider {
	/**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/helpers.php' => base_path().'/app/helpers.php',
        ], 'graciano/blade-helpers');
    }
}