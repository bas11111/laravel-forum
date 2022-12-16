<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(20, true),
            'content' =>$this->faker->paragraphs(20, true),
            'thread_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
