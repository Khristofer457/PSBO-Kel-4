<?php

namespace Tests\Unit;

use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_example()
    {
        $response = $this->get("/register");      
        $response -> assertStatus(200);
    }
}
