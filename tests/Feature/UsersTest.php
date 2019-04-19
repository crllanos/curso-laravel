<?php

namespace Test\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase{

    /**
     * @test
     */
    function usersExists(){
        $this->get('/users')
             ->assertStatus(200)
             ->assertSee('the users list');
    }

    /**
     * @test
     */
    function usersAdd(){
        $this->get('/users/add')
             ->assertStatus(200)
             ->assertSee('Adding');
    }

}
?>