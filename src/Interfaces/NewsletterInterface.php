<?php

namespace Cristake\Newsletter\Interfaces;

interface NewsletterInterface
{
    /**
     * Display all available lists
     *
	 * @return Illuminate\Support\Collection       
     */
	public function getAllLists(array $options = []);


    /**
     * Create a new list
     *
     * Mandatory parameters:
     * name, permission_reminder, email_type_option, contact, campaign_defaults
     *
     * @param  array  $parass
     *
     * @return Illuminate\Support\Collection       
     */
    public function createList($name);


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
    public function getMembersFromList($listId, array $options = []);


    /**
     * Subscribe a new member to a list
     *
     * @param $email        string
     * @param $mergeFields  array
     * @param $listId       string
     *
     * @return Illuminate\Support\Collection       
     */
    public function subscribe($email, array $mergeFields, $listId);


    /**
     * Unsubscribe a member from a list
     *
     * @param $listid       string
     * @param $memberId     string
     *
     * @return Illuminate\Support\Collection       
     */
    public function unsubscribe($listId, $memberId);


    /**
     * Show a member from a list
     *
     * @param $listid       string
     * @param $memberId     string
     * @param $options      associative_array
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