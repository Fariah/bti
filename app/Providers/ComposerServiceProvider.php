<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        // We use the wild card matching to make sure this composer
        // is used on views called  to routes prefixed with /foo (/foo/dashboard /foo/settings)
        // change 'foo.*', '*' if you want all views to have access
        View::composer('*', 'App\Http\Composers\ActiveLinkComposer'
        );

    }

}