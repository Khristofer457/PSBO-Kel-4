<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{   
    public function a_user_can_register()
    {
        $this->post('/register', [
          'name' => 'Joe',
          'email' => 'abc@gmail.com',
          'jenis_pekerjaan' => 'Rental Clerk',
          'no_hp' => '0883145678910',
          'password' => 'passwordtest',
          'password_confirmation' => 'passwordtest'
        ]);

        $response
            ->assertRedirect('/')
            ->assertSessionHas('status', 'Zodra uw account is goedgekeurd ontvangt u een email');

        //Remove password and password_confirmation from array
        array_splice($user,4, 2);

        $this->assertDatabaseHas('users', $user);
    }
   

}
