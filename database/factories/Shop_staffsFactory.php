<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Shop_staffsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'shop_id' => $this->faker->randomDigit,
            'user_id' =>$this->faker->randomDigit,
//                        'last_name'=>$this->faker->text,

        ];
    }
}
