<?php

namespace App\Providers;

use App\Http\Repository\FilmRepository;
use App\Http\Repository\GenreRepository;
use App\Interface\FilmRepositoryInterface;
use App\Interface\GenreRepositoryInterface;
use App\Service\FilmService;
use App\Service\GenreService;
use App\Service\UserService;
use App\Http\Repository\UserRepository;
use App\Interface\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserService::class, UserService::class);

        $this->app->bind(FilmRepositoryInterface::class, FilmRepository::class);
        $this->app->bind(FilmService::class,FilmService::class);

        $this->app->bind(GenreRepositoryInterface::class, GenreRepository::class);
        $this->app->bind(GenreService::class,GenreService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
