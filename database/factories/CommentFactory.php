<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'body' => $this->faker->text(),
        ];
    }
}

//App\Models\User::find(3)->mediaComments;
//App\Models\User::find(3)->allComments();
// $user = App\Models\User::factory()->has(App\Models\Post::factory(2)->has(App\Models\Comment::factory(3), 'comments'))->has(App\Models\Media::factory(1)->has(App\Models\Comment::factory(3), 'comments'))->create();
