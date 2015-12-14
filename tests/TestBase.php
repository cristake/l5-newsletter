<?php

namespace Cristake\Newsletter\Test\MailChimp;

use Mockery;
use PHPUnit_Framework_TestCase;

class TestBase extends PHPUnit_Framework_TestCase
{

    protected $newsletter;

    public function setUp()
    {
        $this->newsletter = Mockery::mock('Cristake\Newsletter\Newsletter');
    }
}