<?php

namespace Cristake\Newsletter;

use Illuminate\Support\ServiceProvider;
use Mailchimp\Mailchimp;

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
        $this->app->bindShared('l5-newsletter-mailchimp', function () {

            $apiKey = $this->app['config']->get('l5-newsletter.mailChimp.apiKey');

            if ($apiKey) {
                return new Mailchimp($apiKey);
            }
        });

        $this->app->bind(
            'Cristake\Newsletter\Interfaces\NewsletterListInterface',
            'Cristake\Newsletter\MailChimp\NewsletterList'
        );

        $this->app->bind(
            'Cristake\Newsletter\Interfaces\NewsletterCampaignInterface',
            'Cristake\Newsletter\MailChimp\NewsletterCampaign'
        );

        $this->app->bind(
            'Cristake\Newsletter\Interfaces\NewsletterInterface',
            'Cristake\Newsletter\MailChimp\Newsletter'
        );

        $this->app->bind(
            'l5-newsletter',
            'Cristake\Newsletter\MailChimp\Newsletter'
        );
    }
}
