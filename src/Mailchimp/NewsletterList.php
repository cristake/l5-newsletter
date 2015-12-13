<?php

namespace Cristake\Newsletter\Mailchimp;

use Cristake\Newsletter\Interfaces\NewsletterListInterface;

class NewsletterList extends MailchimpBase implements NewsletterListInterface
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Support\Collection       
     */
    public function all(array $options = [])
    {
        return $this->mailchimp
            ->get('lists', $options);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  array  $parameters Pass the details for the list
     *
     * @return mixed  
     */
    public function store(array $parameters)
    {
		return $this->mailchimp
            ->post('lists', $parameters);
    }


    /**
     * Display the specified resource.
     *
     * @param  string $listId List ID
     *
     * @return Illuminate\Support\Collection       
     */
    public function show($listId, array $options = [])
    {
        return $this->mailchimp
            ->get('lists/' . $listId, $options);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $listId List ID
     *
     * @return mixed  
     */
    public function destroy($listId)
    {
        return $this->mailchimp
            ->delete('lists/' . $listId);
    }


}