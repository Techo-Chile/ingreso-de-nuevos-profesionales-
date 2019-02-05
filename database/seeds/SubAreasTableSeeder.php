<?php

use Illuminate\Database\Seeder;

class SubAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sub_areas')->insert([
            'name' => 'Comunicaciones',
            'area_father'=>2,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Perosnas',
            'area_father'=>2,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('sub_areas')->insert([
            'name' => 'Finanzas',
            'area_father'=>3,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Procesos y tecnologías',
            'area_father'=>3,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Legal',
            'area_father'=>3,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Remuneraciones',
            'area_father'=>3,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Secretaria administrativa',
            'area_father'=>3,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Mantenimiento',
            'area_father'=>3,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('sub_areas')->insert([
            'name' => 'Alianzas',
            'area_father'=>4,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Donantes individuales',
            'area_father'=>4,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Marketing y fidelización',
            'area_father'=>4,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Proyectos BI',
            'area_father'=>4,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('sub_areas')->insert([
            'name' => 'Desarrollo e innovación (Arquitectura)',
            'area_father'=>5,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Legal',
            'area_father'=>5,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Ingeniería y construcción',
            'area_father'=>5,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Organización comunitaria',
            'area_father'=>5,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Zonal',
            'area_father'=>5,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('sub_areas')->insert([
            'name' => 'Intervención',
            'area_father'=>6,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Educación',
            'area_father'=>6,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Construcción',
            'area_father'=>6,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Capacitaciones',
            'area_father'=>6,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Regiones',
            'area_father'=>6,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('sub_areas')->insert([
            'name' => 'Investigación aplicada',
            'area_father'=>7,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Investigación territorial',
            'area_father'=>7,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sub_areas')->insert([
            'name' => 'Diagnostico y evaluación',
            'area_father'=>7,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);





    }
}
