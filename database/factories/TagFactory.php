<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
        ];
    }
}

// App\Models\Post::all()->each(fn($p)=>$p->tags()->attach(App\Models\Tag::inRandomOrder()->limit(rand(1,4))->pluck('id')));
