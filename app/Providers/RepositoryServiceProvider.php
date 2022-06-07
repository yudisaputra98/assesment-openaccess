<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Produk\Interfaces\ProdukRepositoryInterface;
use Modules\Produk\Repositories\ProdukRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProdukRepositoryInterface::class, ProdukRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
