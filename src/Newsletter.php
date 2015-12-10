<?php

namespace Cristake\Newsletter;

use Cristake\Newsletter\Interfaces\NewsletterInterface;

class Newsletter implements NewsletterInterface
{
    /**
     * Subscribe the email address to given list.
     *
     * @param $email
     * @return mixed
     */
    public function subscribe($email)
    {
    	return $email;
    }
}