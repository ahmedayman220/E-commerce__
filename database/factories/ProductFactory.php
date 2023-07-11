<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_name = $this->faker->word;
        $vendors_id = DB::table('users')->where('role' , 'vendor')->pluck('id');
        return [
            'brand_id'  => $this->faker->numberBetween(1,10),
            'category_id'  => $this->faker->numberBetween(1,10),
            'subcategory_id'  => $this->faker->numberBetween(1,10),
            'product_name'  => $product_name,
            'product_slug'  => Str::of($product_name)->slug(),
            'product_code'  => $this->faker->creditCardNumber,
            'product_qty'  => $this->faker->numberBetween(1,100),
            'product_tags'  => $this->faker->sentence(1),
            'product_size'  => $this->faker->numberBetween(1,100),
            'product_color'  => 'red',
            'selling_price'  => $this->faker->numberBetween(500,1000),
            'discount_price'  => '10',
            'short_descp'  => $this->faker->realText(30),
            'long_descp'  => $this->faker->text(),
            'product_thambnail'  => $this->faker->sentence(),
            'vendor_id'  => $this->faker->randomElement($vendors_id),
//            'vendor_id'  => 2,
            'hot_deals'  => $this->faker->numberBetween(1,100),
            'featured'  =>  $this->faker->numberBetween(1,100),
            'special_offer'  =>  $this->faker->numberBetween(1,100),
            'special_deals'  =>  $this->faker->numberBetween(1,100),
            'status'  => 1,
        ];
    }
}
