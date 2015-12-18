<?php

namespace Cristake\Newsletter\Test\MailChimp;

use Mockery;
use PHPUnit_Framework_TestCase;
use Cristake\Newsletter\MailChimp\Newsletter;

class NewsletterTest extends PHPUnit_Framework_TestCase
{
    protected $campaign;
    protected $list;
    protected $newsletter;

    public function setUp()
    {
        $this->campaign = Mockery::mock('Cristake\Newsletter\MailChimp\NewsletterCampaign');
        $this->list = Mockery::mock('Cristake\Newsletter\MailChimp\NewsletterList');

        $this->newsletter = new Newsletter($this->campaign, $this->list);
    }

    /**
     * @test
     */
    public function it_can_subscribe_an_email_adress_to_a_list()
    {
        $this->list
            ->shouldReceive('subscribe')
            ->with('freek@Cristake.be', ['firstName' => 'Freek', 'lastName' => 'Van der Herten'], 'testlist');

        $this->newsletter
            ->subscribe('freek@Cristake.be', ['firstName' => 'Freek', 'lastName' => 'Van der Herten'], 'testlist');
    }

    /**
     * @test
     */
    public function it_can_update_an_email_subscribed_to_a_list()
    {
        $this->list
            ->shouldReceive('updateMember')
            ->with('freek@Cristake.be', ['firstName' => 'Freek', 'lastName' => 'Van der Herten'], 'testlist');

        $this->newsletter
            ->updateMember('freek@Cristake.be', ['firstName' => 'Freek', 'lastName' => 'Van der Herten'], 'testlist');
    }

    /**
     * @test
     */
    public function it_can_unsubscribe_an_email_address_from_a_list()
    {
        $this->list
            ->shouldReceive('unsubscribe')
            ->with('freek@Cristake.be', 'testlist');

        $this->newsletter
            ->unsubscribe('freek@Cristake.be', 'testlist');
    }

    /**
     * @test
     */
    public function it_can_create_a_campaign()
    {
        $this->campaign
            ->shouldReceive('create')
            ->with('subject', 'content', 'testlist');

        $this->newsletter
            ->createCampaign('subject', 'content', 'testlist');
    }

    /**
     * @test
     */
    public function it_can_update_a_campaign()
    {
        $this->campaign
            ->shouldReceive('update')
            ->with('campaignId', 'fieldName', ['key' => 'value']);

        $this->newsletter
            ->updateCampaign('campaignId', 'fieldName', ['key' => 'value']);
    }

    /**
     * @test
     */
    public function it_can_delete_a_campaign()
    {
        $this->campaign
            ->shouldReceive('delete')
            ->with('campaignId');

        $this->newsletter
            ->deleteCampaign('campaignId');
    }

    /**
     * @test
     */
    public function it_can_send_a_test_campaign()
    {
        $this->campaign
            ->shouldReceive('sendTest')
            ->with('campaignId', ['user1@example.org', 'user2@example.org'], 'sendType');

        $this->newsletter
            ->sendTestCampaign('campaignId', ['user1@example.org', 'user2@example.org'], 'sendType');
    }

    /**
     * @test
     */
    public function it_can_send_a_campaign()
    {
        $this->campaign
            ->shouldReceive('send')
            ->with('campaignId');

        $this->newsletter
            ->sendCampaign('campaignId');
    }
}
