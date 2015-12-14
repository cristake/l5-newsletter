<?php

namespace Cristake\Newsletter\Interfaces;

interface NewsletterInterface
{
    /**
     * Display all available lists
     *
	 * @return Illuminate\Support\Collection       
     */
	public function allLists(array $options = []);


    /**
     * Create a new list
     *
     * Mandatory parameters:
     * name, permission_reminder, email_type_option, contact, campaign_defaults
     *
     * @param  array  $parameters
     *
     * @return mixed  
     */
    public function createList(array $parameters);


    /**
     * Shows the list details
     *
     * @param  string  $listId
     * @param  array  $options
     *
     * @return mixed  
     */
    public function showList($listId, array $options = []);


    /**
     * Delete a list
     *
     * @param  string  $listId
     *
     * @return mixed  
     */
    public function deleteList($listId);


    /**
    
     * List all members of a list
     *
     * @param  string  $listId
     * @param  array  $options
     *
     * @return mixed  
     */
    public function listMembers($listId, array $options = []);


    /**
     * Show a member from a list
     *
     * @param  string  $listId
     * @param  string  $memberId
     * @param  array  $options
     *
     * @return mixed  
     */
    public function showMember($listId, $memberId, array $options = []);

}