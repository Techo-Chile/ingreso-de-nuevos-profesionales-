<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('estados')->insert([
            'name' => 'CF1',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'name' => 'envio @ privado',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'name' => 'CF2',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'name' => '@techo',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'name' => 'Notificar G.A',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
