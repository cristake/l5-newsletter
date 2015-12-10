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
        $this->app->bindShared('l5-newsletter', function() {

            $apiKey = $this->app['config']->get('l5-newsletter.mailChimp.apiKey');

            if ($apiKey)
            {
                return new Mailchimp($apiKey);
            }
        });


        $this->app->bind(
            'Cristake\Newsletter\Interfaces\NewsletterInterface',
            'Cristake\Newsletter\Newsletter'
        );

        // $this->app->bind(
        //     'Spatie\Newsletter\Interfaces\NewsletterCampaignInterface',
        //     'Spatie\Newsletter\MailChimp\NewsletterCampaign'
        // );

        // $this->app->bind(
        //     'Spatie\Newsletter\Interfaces\NewsletterInterface',
        //     'Spatie\Newsletter\MailChimp\Newsletter'
        // );

        // $this->app->bind(
        //     'laravel-newsletter',
        //     'Spatie\Newsletter\MailChimp\Newsletter'
        // );
    }
}
