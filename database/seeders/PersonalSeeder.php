<?php

namespace Database\Seeders;

use App\Models\personal;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        personal::factory(50)->create();
    }
}
