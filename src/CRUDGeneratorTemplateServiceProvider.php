<?php

namespace CheweiHu\CRUDGeneratorTemplate;

use Illuminate\Support\ServiceProvider;

class CRUDGeneratorTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
			__DIR__.'/crud-generator' => resource_path('crud-generator'),
		]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
