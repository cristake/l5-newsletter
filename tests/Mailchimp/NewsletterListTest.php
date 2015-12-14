<?php

namespace Cristake\Newsletter\Test\MailChimp;

class NewsletterListTest extends TestBase
{
    /**
     * @test
     */
    public function it_shows_all_available_lists()
    {
        $this->newsletter
            ->shouldReceive('allLists')
            ->with('lists.id, lists.name, lists.stats.member_count');

        $this->newsletter
            ->allLists('lists.id, lists.name, lists.stats.member_count');
    }


    /**
     * @test
     */
    public function it_can_create_a_list()
    {
        $this->newsletter
            ->shouldReceive('createList')->with('listName');

        $this->newsletter
            ->createList('listName');
    }


    /**
     * @test
     */
    public function it_shows_a_list_details()
    {
        $this->newsletter
            ->shouldReceive('showLists')
            ->with('listId');

        $this->newsletter
            ->showLists('listId');
    }


    /**
     * @test
     */
    public function it_can_delete_a_list()
    {
        $this->newsletter
            ->shouldReceive('deleteList')
            ->with('listId');

        $this->newsletter
            ->deleteList('listId');
    }
}