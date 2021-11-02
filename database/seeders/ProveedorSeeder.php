<?php

namespace Database\Seeders;

use App\Models\proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        proveedor::factory(50)->create();
    }
}
