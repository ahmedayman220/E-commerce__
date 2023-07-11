<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteSetting>
 */
class SiteSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'logo' => 'upload/logo/1743021438232663.png',
            'support_phone' => $this->faker->phoneNumber,
            'phone_one' => $this->faker->phoneNumber,
            'email' => $this->faker->companyEmail,
            'company_address' => $this->faker->address,
            'facebook' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'youtube' => $this->faker->url(),
            'copyright' => $this->faker->name,
        ];
    }
}
