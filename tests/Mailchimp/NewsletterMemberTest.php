<?php

namespace Cristake\Newsletter\Test\MailChimp;

class NewsletterMemberTest extends TestBase
{
    /**
     * @test
     */
    public function it_can_show_all_members_from_a_list()
    {
        $this->newsletter->shouldReceive('listMembers')->with('listId');

        $this->newsletter->listMembers('listId');
    }


    /**
     * @test
     */
    public function it_can_show_a_member_from_a_list()
    {
        $this->newsletter->shouldReceive('showMember')->with('listId', 'memberId');

        $this->newsletter->showMember('listId', 'memberId');
    }


    /**
     * @test
     */
    // public function it_delete_a_member_from_a_list()
    // {
    //     $this->newsletter->shouldReceive('showLists')->with('list_id');

    //     $this->newsletter->showLists('list_id');
    // }

}