<?php

namespace Tests\Feature\Api\Auth;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * @test
     *
     */
    public function it_can_login()
    {
        $credentials = [
            'user' => [
                'identity' => '',
                'password' => '',
            ]
        ];
        $this->postJson(route('/api/users/login'), $credentials)
            ->assertStatus(200)
            ->dump();
    }
}
