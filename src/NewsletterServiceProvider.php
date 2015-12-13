<?php

namespace Cristake\Newsletter;

use Mailchimp\Mailchimp;
use Illuminate\Support\ServiceProvider;
use Cristake\Newsletter\Mailchimp\Newsletter;

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
        $this->app->bindShared('l5-newsletter-mailchimp', function() {

            $apiKey = $this->app['config']->get('l5-newsletter.mailchimp.apikey');

            if ($apiKey)
            {
                return new Mailchimp($apiKey);
            }
        });


        $this->app->bind(
            'Cristake\Newsletter\Interfaces\NewsletterListInterface',
            'Cristake\Newsletter\MailChimp\NewsletterList'
        );


        $this->app->bind(
            'Cristake\Newsletter\Interfaces\NewsletterMemberInterface',
            'Cristake\Newsletter\MailChimp\NewsletterMember'
        );


        $this->app->bind(
            'l5-newsletter',
            'Cristake\Newsletter\MailChimp\Newsletter'
        );
    }
}