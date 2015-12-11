<?php

namespace Cristake\Newsletter\Interfaces;

interface NewsletterInterface
{
	/**
	 * Get a list by its ID
	 * @param  string $listID List ID
	 * @return collection       
	 */
    public function getList($listID = '', array $options = [], $method = 'GET');


    /**
     * Create a new list
     * @param  array  $parameters Pass the details for the list
     * @return mixed  
     */
	public function createList(array $parameters = []);
}