<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**
         * 6:04pm 11-24-2020
         *
         * Seeding the Post table using the artisan tinker use the ff command:
         * - This will generate 200 post record connecting to the user.id 2
         * App\Models\Post::factory()->times(200)->create(['user_id' => 2]);
         */
        return [
            'body' => $this->faker->sentence(20),
        ];
    }
}
