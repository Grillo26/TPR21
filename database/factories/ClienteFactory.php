<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_cliente' => $this -> faker ->name,
            'dirección_cliente' => $this -> faker->streetAddress(),
            'telefono_cliente' => $this->faker-> phoneNumber(),
            'fechaNac_cliente' => $this-> faker-> date($format ='Y-m-d'),
            'observaciones_cliente' => $this->faker->realText($maxNbChars = 30),
            'created_at' => $this-> faker->dateTime,
            'updated_at' => $this-> faker->dateTime,
        ];
    }
}
