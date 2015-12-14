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
     * @param  string $listId
     * @param  string $email
     * @param  string $status
     * @param  array $mergeFields
     *
     * @return mixed  
     */
    public function create($listId, $email, $status, array $mergeFields = [])
    {
        return $this->mailchimp
            ->post(
                sprintf('lists/%s/members', $listId),
                [
                    'email_address' => $email,
                    'status' => $status,
                    'merge_fields' => $mergeFields
                ]
            );
    }


    /**
     * Display the specified resource.
     *
     * @param  string $listId List ID
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
     * Create a new member
     *
     * @param  string $listId
     * @param  string $email
     * @param  string $status
     * @param  array $mergeFields
     *
     * @return mixed  
     */
    public function update($listId, $email, $status = 'subscribed', array $mergeFields = [])
    {
        return $this->mailchimp
            ->post(
                sprintf('lists/%s/members', $listId),
                [
                    'email_address' => $email,
                    'status' => $status,
                    'merge_fields' => $mergeFields
                ]
            );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  string $listId
     * @param  string $memberId
     *
     * @return mixed  
     */
    public function destroy($listId, $memberId)
    {
        return $this->mailchimp
            ->delete( sprintf('lists/%s/members/%s', $listId, $memberId) );
    }


}