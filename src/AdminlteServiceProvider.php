<?php

namespace Sithu\Adminlte;

use Illuminate\Support\ServiceProvider;

class AdminlteServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('sithu-adminlte', function() {
			return new Adminlte;
		});

		// $this->mergeConfigFrom(
		// 	__DIR__ . '/config/main.php', 'sithu-adminlte-main'
		// 	);
	}

	public function boot()
	{
		$this->publishes([
			__DIR__ . '/config' => config_path('sithu-adminlte'),'config'
			]);

		$this->publishes([
			__DIR__.'/public' => public_path(),
			], 'public');

		$this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/adminlte')
        ],'views');		
	}
}
