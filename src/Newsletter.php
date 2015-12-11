<?php

namespace Cristake\Newsletter;

use Exception;
use Cristake\Newsletter\Interfaces\NewsletterInterface;
use Mailchimp\Mailchimp;

class Newsletter implements NewsletterInterface
{
    /**
     * @var string
     */
    private $apikey;

	public function __construct($apikey = '')
	{
		$this->apikey = config('l5-newsletter.mailchimp.apikey');

		if( ! $this->apikey )
			throw new Exception('Please provide an API key.');

		$this->mailchimp = new Mailchimp( $this->apikey );
	}

	/**
	 * Get a list by its ID
	 * @param  string $listID List ID
	 * @return collection       
	 */
    public function getList($listID = '', array $options = [], $method = 'GET')
    {
		if( ! $listID )
			throw new Exception('Please provide an List ID.');

    	return $this->mailchimp->request('lists/' . $listID, $options, $method);
    }


    /**
     * Create a new list
     * @param  array  $parameters Pass the details for the list
     * @return mixed  
     */
    public function createList(array $parameters = [])
    {
		if( ! $parameters )
			throw new Exception('Please provide some parameters for the new list to be created.');

    	return $this->mailchimp->post('lists', $parameters);
    }
}