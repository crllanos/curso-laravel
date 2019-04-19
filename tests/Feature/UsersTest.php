<?php

namespace Test\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase{

    /**
     * @test
     */
    function usersIndex(){
        $this->get('/')
             ->assertStatus(200)
             ->assertSee('Holanda');
    }

    /**
     * @test
     */
    function usersExists(){
        $this->get('/users')
             ->assertStatus(200)
             ->assertSee('users');
    }

    /**
     * @test
     */
    function usersAdd(){
        $this->get('/users/add')
             ->assertStatus(200)
             ->assertSee('Adding');
    }
    /**
     * @test
     */
    function usersId(){
        $this->get('/users/200')
             ->assertStatus(200)
             ->assertSee('Info user 200.');
    }
}
?>