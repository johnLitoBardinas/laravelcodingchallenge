<?php

use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;



uses(RefreshDatabase::class);

test('the homepage highOrder Proxies')->get('/')->assertOk();

// it('test the homepage', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });

it('creates a new user', function () {
    User::factory()->create();

    $this->assertTrue(User::exists());
});

// beforeEach(fn () => User::factory()->create());

// it('has users')->assertDatabaseHas('users', [
//     'id' => 1,
// ]);
