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
     * @return Illuminate\Support\Collection       
     */
    public function createList(array $parameters);


    /**
     * Shows the list details
     *
     * @param  string  $listId
     * @param  array  $options
     *
     * @return Illuminate\Support\Collection       
     */
    public function showList($listId, array $options = []);


    /**
     * Delete a list
     *
     * @param  string  $listId
     *
     * @return Illuminate\Support\Collection       
     */
    public function deleteList($listId);


    /**
    
     * List all members of a list
     *
     * @param  string  $listId
     * @param  array  $options
     *
     * @return Illuminate\Support\Collection       
     */
    public function listMembers($listId, array $options = []);


    /**
     * Subscribe a new member to a list
     *
     * @param $listid
     * @param $params
     *
     * @return Illuminate\Support\Collection       
     */
    public function subscribe($listId, array $params);


    /**
     * Show a member from a list
     *
     * @param  string  $listId
     * @param  string  $memberId
     * @param  array  $options
     *
     * @return Illuminate\Support\Collection       
     */
    public function showMember($listId, $memberId, array $options = []);


    /**
     * Delete a member from a list
     *
     * @param  string  $listId
     * @param  string  $memberId
     *
     * @return Illuminate\Support\Collection       
     */
    public function deleteMember($listId, $memberId);
}