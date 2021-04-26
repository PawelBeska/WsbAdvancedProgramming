<?php

namespace App\Providers;

use App\Models\Employee;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\EmployeeRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\EmployeeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepository::class);

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
