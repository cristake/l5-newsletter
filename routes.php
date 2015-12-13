<?php

Route::get('lists', function ()
	{
		return Newsletter::allLists([
			// 'fields' => 'lists.id,lists.name,lists.stats.member_count'
		]);
	});

Route::post('lists', function()
	{
		return Newsletter::createList([
			'name' => 'Edugent',
			'permission_reminder' => 'You are receiving this because you signed up for updates on http://www.edugent.com.',
			'email_type_option' => false,
			'contact' => [
			    'company' => 'Edugent Ltd.',
			    'address1' => '25 Mircea Eliade Street',
			    'address2' => '',
			    'city' => 'Voluntari',
			    'state' => '',
			    'zip' => '077178',
			    'country' => 'RO',
			    'phone' => '0727128988'
			],
			'campaign_defaults' => [
			    'from_name' => 'Edugent Ltd.',
			    'from_email' => 'no-reply@edugent.com',
			    'subject' => 'Welcome to edugent.com',
			    'language' => 'US'
			]
		]);
	});

Route::get('lists/{id}', function ($listId)
	{
		return Newsletter::showList($listId, [
			// 'fields' => 'id,name,stats.member_count',
			// 'offset' => 10
			// 'count' => 10
		]);
	});

Route::delete('lists/{id}', function ($listId)
	{
		return Newsletter::deleteList($listId);
	});

Route::get('lists/{id}/members', function($listId)
	{
		return Newsletter::listMembers($listId);
	});

// Route::get('campaigns', function()
// 	{
// 		$mc = new Mailchimp\Mailchimp( env('MAILCHIMP_APIKEY') );

// 		return $mc->request('campaigns');
// 	});

// Route::get('templates', function()
// 	{
// 		$mc = new Mailchimp\Mailchimp( env('MAILCHIMP_APIKEY') );

// 		return $mc->request('templates');
// 	});

// Route::get('reports', function()
// 	{
// 		$mc = new Mailchimp\Mailchimp( env('MAILCHIMP_APIKEY') );

// 		return $mc->request('reports');
// 	});



