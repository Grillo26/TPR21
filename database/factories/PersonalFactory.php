<?php

namespace Database\Factories;

use App\Models\personal;
use App\Models\tipo_personal;
use App\Models\turno;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = personal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_personal' => $this-> faker->company(),
            'telefono_personal' => $this-> faker->phoneNumber(),
            'direccion_personal' => $this-> faker->streetAddress(),
            'created_at' => $this-> faker->dateTime,
            'updated_at' => $this-> faker->dateTime,
        ];
    }
}
