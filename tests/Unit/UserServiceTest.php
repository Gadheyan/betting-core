<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testCreateUser()
    {
        User::create([
            'name' => 'aswin',
            'email' => 'aswin.snath@live.com',
            'password' => '123456'
        ]);
    }
}
