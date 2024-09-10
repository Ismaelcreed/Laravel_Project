<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
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
    public function definition(): array
    {
        $product_name= $this->faker->unique()->words($nb=2 , $asText = true);
        $etiquette = Str::slug($product_name);
        $image_name = $this->faker->numberBetween(1,24).'.jpg';
        return [
           'nom'=> Str::title($product_name),
           'etiquette' => $etiquette,
           'petit_desc' => $this->faker->text(200),
           'desc' => $this->faker->text(500),
           'prix_normal' => $this->faker->numberBetween(1,22),
           'status_stock' => 'stocker',
           'quantite' => $this->faker->numberBetween(100,200),
           'image' => $image_name,
           'images' => $image_name,
           'category_id' => $this->faker->numberBetween(1,6),
           'brand_id' => $this->faker->numberBetween(1,6),
        ];
    }
}
