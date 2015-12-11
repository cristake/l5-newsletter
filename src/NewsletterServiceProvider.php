<?php

namespace Cristake\Newsletter;

use Illuminate\Support\ServiceProvider;
// use Mailchimp\Mailchimp;

class NewsletterServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/l5-newsletter.php' => config_path('l5-newsletter.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind('l5-newsletter', function() {

            return new Newsletter;
            // return new NewsletterInterface;

        });

        // $this->app->bind(
        //     'Cristake\Newsletter\Interfaces\NewsletterInterface',
        //     'Cristake\Newsletter\Newsletter'
        // );
    }
}