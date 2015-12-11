<?php

namespace Cristake\Newsletter;

use Illuminate\Support\Facades\Facade;

class NewsletterFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'l5-newsletter';
    }
}