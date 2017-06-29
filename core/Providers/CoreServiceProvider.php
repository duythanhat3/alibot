<?php
namespace Core\Providers;

use Core\Repositories\BookRepository;
use Core\Repositories\BookRepositoryContract;
use Core\Services\BookService;
use Core\Services\BookServiceContract;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(BookRepositoryContract::class, BookRepository::class);
        $this->app->bind(BookServiceContract::class, BookService::class);
    }
}