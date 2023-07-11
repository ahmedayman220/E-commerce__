<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_name = $this->faker->unique()->word;
        return [
            'category_name' => $category_name,
            'category_slug' => Str::of($category_name)->slug('-'),
            'category_image' => 'upload/category/1740388203907617.png',
        ];
    }
}
