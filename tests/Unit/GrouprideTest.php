<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GrouprideTest extends TestCase
{

    use RefreshDatabase;

    public function test_has_a_path()
    {
       $groupride = factory('App\Groupride')->create();

       $this->assertEquals($groupride->path(), '/grouprides/' . $groupride->id);
    }
}
