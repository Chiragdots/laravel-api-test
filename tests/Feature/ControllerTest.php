<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\Response;

class ControllerTest extends TestCase
{
    /**
     * A basic feature test for pass sql query in url .
     *
     * @return void
     */
    public function test_sql()
    {

        $this->json('get', 'api/get-hotel')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'data' => [
                    '*' => [
                        'id',
                    ]
                ]
            ]
        );

        $this->json('get', 'api/get-hotel/7')->assertStatus(Response::HTTP_OK);
    }
}
