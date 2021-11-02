<?php

namespace Database\Factories;

use App\Models\Insumo;
use Illuminate\Database\Eloquent\Factories\Factory;

class InsumoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Insumo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_insumo' => $this-> faker-> jobTitle(),
            'cantidad_insumo' => $this-> faker->randomDigit(),
            'unidadMedida_insumo' => $this-> faker->word('kg','lb','lt','ml'),
            'created_at' => $this-> faker->dateTime,
            'updated_at' => $this-> faker->dateTime
        ];
    }
}
