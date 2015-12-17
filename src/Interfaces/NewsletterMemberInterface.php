<?php

namespace Cristake\Newsletter\Interfaces;

interface NewsletterMemberInterface
{
    /**
     * List all the members from a list
     *
     * @param $listid       string
     * @param $options      associative_array
	 *
     * @return mixed  
     */
    public function index($listId, array $options = []);


    /**
     * Create a new member
     *
     * @param $email        string
     * @param $mergeFields  associative_array
     * @param $listid       string
     *
     * @return mixed  
     */
    public function create($email, array $mergeFields = [], $listId);


    /**
     * List a member from a list
     *
     * @param $listid       string
     * @param $memberId     string
     * @param $options      associative_array
	 *
     * @return mixed  
     */
    public function show($listId, $memberId, array $options = []);


    /**
     * Update member
     *
     * @param $listid       string
     * @param $memberId     string
     * @param $options      associative_array
     *
     * @return mixed  
     */
    public function update($listId, $memberId, array $options = []);

    /**
     * Remove the specified resource from storage.
     *
     * @param $listid       string
     * @param $memberId     string
     *
     * @return mixed  
     */
    public function destroy($listId, $memberId);

}