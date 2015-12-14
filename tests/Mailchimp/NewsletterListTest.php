<?php

namespace Cristake\Newsletter\Test\MailChimp;

class NewsletterListTest extends TestBase
{
    /**
     * @test
     */
    public function it_shows_all_available_lists()
    {
        $this->list
            ->shouldReceive('index')
            ->with(['fields' => 'lists.id, lists.name, lists.stats.member_count']);

        $this->newsletter
            ->allLists(['fields' => 'lists.id, lists.name, lists.stats.member_count']);
    }


    /**
     * @test
     */
    public function it_can_create_a_list()
    {
        $this->list
            ->shouldReceive('create')
            ->with(['listName']);

        $this->newsletter
            ->createList(['listName']);
    }


    /**
     * @test
     */
    public function it_shows_a_list_details()
    {
        $this->list
            ->shouldReceive('show')
            ->with('listId', ['options']);

        $this->newsletter
            ->showList('listId', ['options']);
    }


    /**
     * @test
     */
    public function it_can_delete_a_list()
    {
        $this->list
            ->shouldReceive('destroy')
            ->with('listId');

        $this->newsletter
            ->deleteList('listId');
    }
}