<?php

namespace Tests\Unit;

use Tests\TestCase;

class HomepageTest extends TestCase
{
   
    public function test_example()
    {
        // $this->assertTrue(true);
        $this->get("/")->assertStatus(200);
    }
}
