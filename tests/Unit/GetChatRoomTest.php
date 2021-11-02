<?php

namespace Tests\Unit;

use Tests\TestCase;

class GetChatRoomTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get(route('message.getall'))->assertStatus(200);
    }
}
