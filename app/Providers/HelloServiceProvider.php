<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\HTTP\Validators\HelloValidator;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $validator = $this->app['validator'];

        $validator->resolver(function($translator, $date, $rules, $messages) {
            return new HelloValidator($translator, $date, $rules, $messages);
        });
    }
}
