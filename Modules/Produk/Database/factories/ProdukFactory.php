<?php

namespace Modules\Produk\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Produk\Entities\ProdukFactory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'details' => $this->faker->sentences(4, true),
            'client' => $this->faker->name(),
            'is_fulfilled' => $this->faker->boolean(),
        ];
    }
}

