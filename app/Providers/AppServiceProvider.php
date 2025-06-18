<?php

namespace App\Providers;

use App\Services\ProjectService;
use App\Services\Impl\ProjectServiceImpl;
use App\Services\Impl\TaskServiceImpl;
use App\Services\TaskService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(ProjectService::class, ProjectServiceImpl::class);
        $this->app->bind(TaskService::class, TaskServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
