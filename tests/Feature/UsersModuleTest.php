<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    function it_loads_the_users()
    {
        $response = $this->get('/usuarios');

        $response->assertStatus(200);
        $response->assertSee('Usuarios');
    }
    /**
     * A basic feature test example.
     *
     * @test
     */
    function it_load_by_id_the_users()
    {
        $response2 = $this->get('/usuarios/6');

        $response2->assertStatus(200);
        $response2->assertSee('Obteneiendo id: 6');
    }
}
