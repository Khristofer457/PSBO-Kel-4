<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_example()
    {
        $response = $this->get("/login");      
        $response -> assertStatus(200);
    }
}
