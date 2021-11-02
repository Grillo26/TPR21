<?php

namespace Database\Factories;

use App\Models\proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = proveedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_proveedor' => $this-> faker->name,
            'direccion_proveedor' => $this-> faker->streetAddress(),
            'telefono_proveedor' => $this-> faker->phoneNumber(),
            'email' => $this-> faker->email(),
            'created_at' => $this-> faker->dateTime,
            'updated_at' => $this-> faker->dateTime
        ];
    }
}
