<?php

namespace Database\Seeders;

use App\Models\insumo;
use Database\Factories\InsumoFactory;
use Illuminate\Database\Seeder;

class InsumoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insumo::factory(400)->create();
    }
}
