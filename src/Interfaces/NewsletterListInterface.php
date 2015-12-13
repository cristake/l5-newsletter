<?php

namespace Cristake\Newsletter\Interfaces;

interface NewsletterListInterface
{
	/**
     * Display a listing of the resource.
     *
     * @param array $options
	 *
	 * @return Illuminate\Support\Collection       
	 */
    public function all(array $options = []);


    /**
     * Store a newly created resource in storage.
     *
     * @param  array  $parameters Pass the details for the list
     *
     * @return mixed  
     */
	public function store(array $parameters);


	/**
     * Display the specified resource.
	 *
	 * @param  string $listId
	 *
	 * @return Illuminate\Support\Collection       
	 */
    public function show($listId, array $options = []);


    /**
     * Remove the specified resource from storage.
     *
	 * @param  string $listId
	 *
     * @return mixed  
     */
    public function destroy($listId);

}