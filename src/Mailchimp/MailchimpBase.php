<?php

namespace Cristake\Newsletter\Mailchimp;

use Illuminate\Contracts\Config\Repository;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Mailchimp\Mailchimp;

abstract class MailchimpBase
{
    /**
     * @var mailChimp
     */
    protected $mailchimp;

    /**
     * @var Repository
     */
    private $config;

	public function __construct(
		Application $app,
		Repository $config
	)
	{
        $this->mailchimp = $app['l5-newsletter-mailchimp'];
        $this->config = $config;
	}

}