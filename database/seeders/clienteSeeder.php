<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Seeder;
use Database\Factories\clienteFactory;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //siteContacto::factory()->count(100)->create();
        cliente::factory()->count(100)->create();
    }
}
