<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(
        'App\Entity\Address\AddressProviderInterface',
        'App\Entity\Address\AddressProvider'
      );
      $this->app->bind(
        'App\Validator\ValidatorInterface',
        'App\Validator\Validator'
      );
    }
}
