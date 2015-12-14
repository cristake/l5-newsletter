<?php

namespace Cristake\Newsletter\Test\MailChimp;

class NewsletterMemberTest extends TestBase
{
    /**
     * @test
     */
    public function it_can_show_all_members_from_a_list()
    {
        $this->member
            ->shouldReceive('index')
            ->with('listId', ['options']);

        $this->newsletter
            ->listMembers('listId', ['options']);
    }


    /**
     * @test
     */
    public function it_can_subscribe_a_new_member_to_a_list()
    {
        $this->member
            ->shouldReceive('create')
            ->with('listId', ['params']);

        $this->newsletter
            ->subscribe('listId', ['params']);
    }

    /**
     * @test
     */
    public function it_can_show_a_member_from_a_list()
    {
        $this->member
            ->shouldReceive('show')
            ->with('listId', 'memberId', ['options']);

        $this->newsletter
            ->showMember('listId', 'memberId', ['options']);
    }


    /**
     * @test
     */
    public function it_delete_a_member_from_a_list()
    {
        $this->member
            ->shouldReceive('destroy')
            ->with('listId', 'memberId');

        $this->newsletter
            ->deleteMember('listId', 'memberId');
    }

}