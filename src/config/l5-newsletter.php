<?php

return [

    'mailchimp' => [

        /*
         * The api key of a MailChimp account. You can find yours here:
         * https://us10.admin.mailchimp.com/account/api-key-popup/
         */
        'apikey' => env('MAILCHIMP_APIKEY'),

        /*
         * These values will be used when creating a new campaign.
         */
        'lists' => [
			/**
			 * Mandatory
			 *
			 * Your subscribers will see this, 
			 * so make it something appropriate.
			 *
			 * Example: “Acme Company Newsletter”
			 */
            'name' => '',

			/**
			 * Mandatory
			 *
			 * Remind people how they signed up to your list
			 *
			 * Example: “You are receiving this because you signed up for updates on http://www.edugent.com”
			 */
            'permission_reminder' => 'You are receiving this because you signed up for updates on http://www.edugent.com',

            'email_type_option' => false,
			'contact' => [
			    'company' => 'Edugent Ltd.',
			    'address1' => '25 Mircea Eliade Street',
			    'address2' => '',
			    'city' => 'Voluntari',
			    'state' => '',
			    'zip' => '077190',
			    'country' => 'RO',
			    'phone' => ''
			],
			'campaign_defaults' => [
				/**
				 * Mandatory
				 */
			    'from_name' => '',

				/**
				 * Mandatory
				 */
			    'from_email' => '',
			    'subject' => '',
			    'language' => ''
			]

        ]
    ]
];