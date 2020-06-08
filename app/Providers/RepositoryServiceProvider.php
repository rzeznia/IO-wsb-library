<?php

namespace App\Providers;

use App\Interfaces\EloquentBaseInterface;
use App\Interfaces\Items\AuthorInterface;
use App\Interfaces\Items\PieceInterface;
use App\Interfaces\Items\PublisherInterface;
use App\Interfaces\Items\ReleaseInterface;
use App\Interfaces\Items\TitleInterface;
use App\Interfaces\Places\LocalizationInterface;
use App\Interfaces\Places\RegalInterface;
use App\Interfaces\User\UserInterface;
use App\Repositories\BaseRepository;
use App\Repositories\Items\AuthorRepository;
use App\Repositories\Items\PieceRepository;
use App\Repositories\Items\PublisherRepository;
use App\Repositories\Items\ReleaseRepository;
use App\Repositories\Items\TitleRepository;
use App\Repositories\Places\LocalizationRepository;
use App\Repositories\Places\RegalRepository;
use App\Repositories\User\UserRepository;
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
        $this->app->bind(EloquentBaseInterface::class, BaseRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(AuthorInterface::class, AuthorRepository::class);
        $this->app->bind(TitleInterface::class, TitleRepository::class);
        $this->app->bind(PublisherInterface::class, PublisherRepository::class);
        $this->app->bind(ReleaseInterface::class, ReleaseRepository::class);
        $this->app->bind(RegalInterface::class, RegalRepository::class);
        $this->app->bind(LocalizationInterface::class, LocalizationRepository::class);
        $this->app->bind(PieceInterface::class, PieceRepository::class);
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
