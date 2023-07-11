<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $brand_name = $this->faker->unique()->sentence(3);
        return [
            'brand_name' => $brand_name,
            'brand_slug' => Str::of($brand_name)->slug(),
            'brand_image' => 'upload/brand/1739356212196819.png'
        ];
    }
}
