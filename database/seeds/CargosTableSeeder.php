<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cargos')->insert([
            'name' => 'Gerente administrativo',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director social',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Sub-Director social',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director de regiones',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director regional',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director Nacional ADH',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director Desarrollo de fondos',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director Nacional Comunicaciones',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director Nacional Centro de invetigación social',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director Nacional de Intervención',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director Nacional de Educación',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director Nacional de Construcciones',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director de Personas',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director de Procesos y tecnologías',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Director de Administración y Finanzas',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Jefe Nacional de Arquitectura',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Jefe Nacional de Ingenieria y Construcción',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
        'name' => 'Jefe Nacional de Organización Comunitaria',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
        'name' => 'Jefe Nacional Legal',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
        'name' => 'Coordinador Techo para aprender',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
        'name' => 'Coordinador Nacional de Intervención',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
        'name' => 'Coordinador Nacional de Banco de Proyectos',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
        'name' => 'Coordinador de Desarrollo Organizacional',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
        'name' => 'Coordinador Nacional Legal',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Nacional de Diagnóstico y Evaluación',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
        'name' => 'Coordinador Nacional de Investigación territorial',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
        'name' => 'Coordinador Nacional de Investigación aplicada',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
        'name' => 'Coordinador de Alianzas Corporativas',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
        'name' => 'Coordinador de Alianzas en Terreno',
        'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador de Captación de Socios',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador de Marketing y fidelización',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Regional de Desarrollo de fondos',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Jefe de Alianzas',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Jefe de Donantes individuales',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Jefe de Proyectos BI',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Sub-Director Desarrollo de fondos',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Ncional de Diseño y publicidad',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Nacional de Prensa y contenido',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Nacional de Redes Sociales',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Nacional de Relaciones institucionales',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Nacional de tesoreria',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cargos')->insert([
            'name' => 'Coordinador Nacional de Administración y finanzas',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Nacional de Finanzas',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Nacional de Contabilidad y auditoria',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Nacional de Procesos y tecnologías',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador de Territorio',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Cordinador de Intervención',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cargos')->insert([
            'name' => 'Cordinador de Educación',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador de Proyectos',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador legal',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Cordinador de Arquitectura',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Técnico',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador Técnico y de Arquitectura',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cargos')->insert([
            'name' => 'Cordinador de Arquitectura y Procurador',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Coordinador de Organización Comunitaria',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Zonal Comercial',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Zonal de Comunicaciones',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Zonal de Administración y Finanzas',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Captador en terreno',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cargos')->insert([
            'name' => 'Encargado regional de dialogo directo',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Auxiliar de aseo',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Auxiliar de mantenimiento',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Practicante',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('cargos')->insert([
            'name' => 'Voluntario',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
