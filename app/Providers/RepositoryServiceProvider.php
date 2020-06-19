<?php

namespace App\Providers;

use App\Contracts\MahasiswaRepositoryInterface;
use App\Contracts\NilaiRepositoryInterface;
use App\Contracts\StudiRepositoryInterface;
use App\Repositories\MahasiswaRepository;
use App\Repositories\NilaiRepository;
use App\Repositories\StudiRepository;
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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(MahasiswaRepositoryInterface::class, MahasiswaRepository::class);
        $this->app->bind(NilaiRepositoryInterface::class, NilaiRepository::class);
        $this->app->bind(StudiRepositoryInterface::class, StudiRepository::class);
    }
}
