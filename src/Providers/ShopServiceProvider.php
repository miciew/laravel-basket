<?php

namespace Miciew\Shop\Basket\Providers;


use Illuminate\Support\ServiceProvider;
use Miciew\Shop\Basket\Contracts\Basket as BasketContract;
use Miciew\Shop\Repositories\Basket as BasketRepository;

class ShopServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton( BasketContract::class, BasketRepository::class );
    }
}