<?php

namespace Cristake\Newsletter\Interfaces;

interface NewsletterMemberInterface
{
    /**
     * List all the members from a list
     *
	 * @param  string $listId
	 * @param  array $options
	 *
     * @return mixed  
     */
    public function index($listId, array $options = []);


    /**
     * Create a new member
     *
     * @param  string $listId
     * @param  array $params
     *
     * @return mixed  
     */
    public function create($listId, array $params);


    /**
     * List a member from a list
     *
	 * @param  string $listId
	 * @param  string $memberId
	 * @param  array $options
	 *
     * @return mixed  
     */
    public function show($listId, $memberId, array $options = []);


    /**
     * Remove the specified resource from storage.
     *
     * @param  string $listId
     * @param  string $memberId
     *
     * @return mixed  
     */
    public function destroy($listId, $memberId);

}