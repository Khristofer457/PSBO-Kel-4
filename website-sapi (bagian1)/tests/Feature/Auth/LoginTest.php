<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\TestResponse;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\User;

class LoginTest extends TestCase
{
    
     /** @test */
    public function registered_user_can_login()
    {

       $this->withExceptionHandling();
        $user = \App\Models\User::factory(User::class)->make([
            'email'    => 'galihgalih@gmail.com',
            'password' => hash::make('12345678'),
        ]);

        $this->get('/login');

        $this->post('/login', [
            'email'    => 'galihgalih@gmail.com',
            'password' => '12345678',
        ]);

        $this->get('/home');

        $this->assertGuest($guard = null);
    }
       
}
