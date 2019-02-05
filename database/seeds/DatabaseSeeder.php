<?php

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
         $this->call(EstadosTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(OficinasTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(SubAreasTableSeeder::class);



    }
}
