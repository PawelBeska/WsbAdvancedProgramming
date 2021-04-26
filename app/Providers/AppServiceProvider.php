<?php

namespace App\Providers;

use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\EmployeeRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\EmployeeRepositoryInterface;
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
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(EmployeeRepositoryInterface::class,  EmployeeRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
