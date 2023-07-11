<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seo>
 */
class SeoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'meta_title' => $this->faker->sentence,
            'meta_author' => $this->faker->sentence,
            'meta_keyword' => $this->faker->sentence,
            'meta_description' => $this->faker->sentence,
        ];
    }
}
