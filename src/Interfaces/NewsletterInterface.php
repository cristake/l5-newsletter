<?php

namespace Cristake\Newsletter\Interfaces;

/**
 * Interface Newsletter.
 */
interface NewsletterInterface
{
    /**
     * Subscribe the email address to given list.
     *
     * @param $email
     * @return mixed
     */
    public function subscribe($email);
}