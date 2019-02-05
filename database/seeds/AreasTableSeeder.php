<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('areas')->insert([
            'name' => 'Dirección ejecutiva',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'name' => 'Asuntos corporativos',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'name' => 'Administración y finanzas',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'name' => 'Desarrollo de fondos',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'name' => 'Desarrollo de habitad',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'name' => 'Dirección social',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'name' => 'CIS',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
