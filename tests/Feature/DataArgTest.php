<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataArgTest extends TestCase
{
    /**
     * A basic feature test for arguments in url.
     *
     * @return void
     */
    public function test_arg()
    {
        $response = $this->get('get-hotel/$#');

        $response->assertStatus(404);
    }
}
