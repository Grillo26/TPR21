<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(TurnoSeeder::class);
        $this->call(TipoPersonalSeeder::class);


        //cliente::factory(30)->create(); ->Otra forma de llamar a los factories
        $this->call(PersonalSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(InsumoSeeder::class);


    }
}
