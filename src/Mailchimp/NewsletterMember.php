<?php

namespace Cristake\Newsletter\Mailchimp;

use Cristake\Newsletter\Interfaces\NewsletterMemberInterface;

class NewsletterMember extends MailchimpBase implements NewsletterMemberInterface
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Support\Collection       
     */
    public function index($listId, array $options = [])
    {
        return $this->mailchimp
            ->get(
                sprintf('lists/%s/members', $listId),
                $options
            );
    }


    /**
     * Create a new member
     *
     * @param $email        string
     * @param $mergeFields  associative_array
     * @param $listid       string
     *
     * @return mixed  
     */
    public function create($email, array $mergeFields = [], $listId)
    {
        return $this->mailchimp
            ->post(
                sprintf('lists/%s/members', $listId),
                [
                    'email' => $email,
                    'status' => 'subscribed',
                    'merge_fields' => $mergeFields
                ]
            );
    }


    /**
     * Display the specified resource.
     *
     * @param $listid       string
     *
     * @return Illuminate\Support\Collection       
     */
    public function show($listId, $memberId, array $options = [])
    {
        return $this->mailchimp
            ->get(
                sprintf('lists/%s/members/%s', $listId, $memberId),
                $options
            );
    }


    /**
     * Update member
     *
     * @param $listid       string
     * @param $memberId     string
     * @param $options      associative_array
     *
     * @return mixed  
     */
    public function update($listId, $memberId, array $options = [])
    {
        return $this->mailchimp
            ->patch(
                sprintf('lists/%s/members/%s', $listId, $memberId),
                $options
            );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $listid       string
     * @param $memberId     string
     *
     * @return mixed  
     */
    public function destroy($listId, $memberId)
    {
        return $this->mailchimp
            ->delete( sprintf('lists/%s/members/%s', $listId, $memberId) );
    }


}