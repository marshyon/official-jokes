<?php

namespace Marshyon\OfficialJokes\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facade\View;

class JokesProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'official-jokes');
    }

    public function register()
    {
        //
    }
}
