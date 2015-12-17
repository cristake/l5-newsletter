<?php

namespace Cristake\Newsletter\Mailchimp;

use Exception;
use Mailchimp\Mailchimp;
use Cristake\Newsletter\Interfaces\NewsletterInterface;
use Cristake\Newsletter\Interfaces\NewsletterListInterface;
use Cristake\Newsletter\Interfaces\NewsletterMemberInterface;

class Newsletter implements NewsletterInterface
{
    /**
     * @var string
     */
    private $apikey;


    /**
     * @var NewsletterList
     */
    private $list;


    /**
     * @var NewsletterMember
     */
    private $member;


    /**
     * @var NewsletterCampaign
     */
    // private $campaign;


    /**
     * Inject the subresources
     */
    public function __construct(
        NewsletterListInterface $list,
        NewsletterMemberInterface $member
    	// NewsletterCampaignInterface $campaign
	)
    {
        $this->list = $list;
        $this->member = $member;
        // $this->campaign = $campaign;
    }


    /**
     * Display all available lists
     *
     * @return Illuminate\Support\Collection       
     */
    public function getAllLists(array $options = [])
    {
    	return $this->list
            ->index($options);
    }

    /**
     * Create a new list
     *
     * Mandatory parameters:
     * name, permission_reminder, email_type_option, contact, campaign_defaults
     *
     * @param   $parameters     array
     *
     * @return mixed  
     */
    public function createList($name)
    {
        $permission_reminder = 'Permission reminder';
        $email_type_option = false;
        $contact = [];
        $campaign_defaults = [];

    	return $this->list
            ->create($name, $permission_reminder, $email_type_option, $contact, $campaign_defaults);
    }


    /**
     * Shows the list details
     *
     * @param $listid       string
     * @param $options      associative_array
     *
     * @return mixed  
     */
    public function showList($listId, array $options = [])
    {
        return $this->list
            ->show($listId, $options);

    }


    /**
     * Delete a list
     *
     * @param $listid       string
     *
     * @return mixed  
     */
    public function deleteList($listId)
    {
    	return $this->list
            ->destroy($listId);
    }


    /**
    
     * List all members of a list
     *
     * @param $listid       string
     * @param $options      associative_array
     *
     * @return mixed  
     */
    public function getMembersFromList($listId, array $options = [])
    {
        return $this->member
            ->index($listId, $options);
    }


    /**
     * Subscribe a new member to a list
     *
     * @param $email        string
     * @param $mergeFields  array
     * @param $listId       string
     *
     * @return Illuminate\Support\Collection       
     */
    public function subscribe($email, array $mergeFields, $listId)
    {
        return $this->member
            ->create($email, $mergeFields, $listId);
    }


    /**
     * Unsubscribe a member from a list
     *
     * @param $listid       string
     * @param $memberId     string
     *
     * @return Illuminate\Support\Collection       
     */
    public function unsubscribe($listId, $memberId)
    {
        return $this->member
            ->update($listId, $memberId, ['status' => 'unsubscribed']);
    }


    /**
     * Show a member from a list
     *
     * @param $listid       string
     * @param $memberId     string
     * @param $options      associative_array
     *
     * @return mixed  
     */
    public function showMember($listId, $memberId, array $options = [])
    {
        return $this->member
            ->show($listId, $memberId, $options);
    }


    /**
     * Delete a member from a list
     *
     * @param $listid       string
     * @param $memberId     string
     *
     * @return mixed  
     */
    public function deleteMember($listId, $memberId)
    {
        return $this->member
            ->destroy($listId, $memberId);
    }
}