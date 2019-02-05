<?php

use Illuminate\Database\Seeder;

class OficinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('oficinas')->insert([
            'name' => 'R. Metropolitana (Nacional)  ',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('oficinas')->insert([
            'name' => 'Iquique',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('oficinas')->insert([
            'name' => 'Antofagasta',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('oficinas')->insert([
            'name' => 'Atacama',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('oficinas')->insert([
            'name' => 'Coquimbo',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'name' => 'Valparaiso',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('oficinas')->insert([
            'name' => 'Biobío',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('oficinas')->insert([
            'name' => 'Los Ríos',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('oficinas')->insert([
            'name' => 'Los Lagos',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
