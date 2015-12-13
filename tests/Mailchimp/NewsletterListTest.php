<?php

namespace Cristake\Newsletter\Test\MailChimp;

use Mockery;
use PHPUnit_Framework_TestCase;
use Cristake\Newsletter\Newsletter;

class NewsletterListTest extends PHPUnit_Framework_TestCase
{

    protected $newsletter;

    public function setUp()
    {
        $this->newsletter = Mockery::mock('Cristake\Newsletter\Newsletter');
    }


    /**
     * @test
     */
    public function it_shows_all_available_lists()
    {
        $this->newsletter->shouldReceive('allLists');

        $this->newsletter->allLists();
    }


    /**
     * @test
     */
    public function it_can_create_a_list()
    {
        $this->newsletter->shouldReceive('createList')->with(['name']);

        $this->newsletter->createList(['name']);
    }


    /**
     * @test
     */
    public function it_shows_a_list_details()
    {
        $this->newsletter->shouldReceive('showLists')->with('list_id');

        $this->newsletter->showLists('list_id');
    }


    /**
     * @test
     */
    public function it_can_delete_a_list()
    {
        $this->newsletter->shouldReceive('deleteList')->with('list_id');

        $this->newsletter->deleteList('list_id');
    }
}