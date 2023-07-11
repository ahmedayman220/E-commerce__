<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $banner_title = $this->faker->unique()->sentence();
        return [
        'banner_title' => $banner_title,
        'banner_url' => Str::of($banner_title)->slug('-'),
        'banner_image' => 'upload/banner/1740131167837853.png'
        ];
    }
}
