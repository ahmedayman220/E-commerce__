<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $subcategory_name = $this->faker->unique()->word;

        return [
            'category_id' => $this->faker->numberBetween(1,10),
            'subcategory_name' => $subcategory_name,
            'subcategory_slug' => Str::of($subcategory_name)->slug(),
        ];
    }
}
