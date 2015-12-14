<?php

namespace Cristake\Newsletter\Test\MailChimp;

use Mockery;
use PHPUnit_Framework_TestCase;
use Cristake\Newsletter\Mailchimp\Newsletter;

class TestBase extends PHPUnit_Framework_TestCase
{
    protected $list;
	protected $member;
	protected $newsletter;

    public function setUp()
    {
        $this->list = Mockery::mock('Cristake\Newsletter\Mailchimp\NewsletterList');
        $this->member = Mockery::mock('Cristake\Newsletter\Mailchimp\NewsletterMember');

        $this->newsletter = new Newsletter($this->list, $this->member);
    }
}