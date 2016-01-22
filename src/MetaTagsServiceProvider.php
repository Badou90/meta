<?php

namespace Badou\MetaTags;

use Illuminate\Support\ServiceProvider;

class MetaTagsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/metatags.php' => config_path('metatags.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MetaTags::class, function() {
            return new MetaTags();
        });

        $this->app->alias(MetaTags::class, 'metatags');
    }
}
