<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class CountUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountUser()
    {
        $user = User::All();
        $recordCount = $user->count();
        $this->assertEquals(50, $recordCount);
    }
}
