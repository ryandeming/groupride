<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GroupridesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function test_a_user_can_create_a_groupride() {
        $attributes = [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'zip' => $this->faker->numberBetween(10000, 99999)
        ];

        $this->post('/grouprides', $attributes);

        $this->assertDatabaseHas('grouprides', $attributes);

        $this->get('/grouprides')->assertSee($attributes['title']);
    }

    public function test_a_groupride_requires_a_title() {
        $attributes = factory('App\Groupride')->raw(['title' => '']);

        $this->post('/grouprides', $attributes)->assertSessionHasErrors('title');
    }

    public function test_a_groupride_requires_a_description() {
        $attributes = factory('App\Groupride')->raw(['description' => '']);

        $this->post('/grouprides', $attributes)->assertSessionHasErrors('description');
    }

    public function test_a_groupride_requires_a_zipcode() {
        $attributes = factory('App\Groupride')->raw(['zip' => '']);

        $this->post('/grouprides', $attributes)->assertSessionHasErrors('zip');
    }
}
