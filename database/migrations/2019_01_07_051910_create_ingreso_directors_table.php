<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresoDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso_directors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid_operacion');
            $table->string('nombres');
            $table->string('apellidop');
            $table->string('apellidom');
            $table->string('rut');
            $table->string('correo_p');
            $table->string('hire_date');
            $table->string('area')->nullable();
            $table->string('cargo')->nullable();
            $table->string('remu');
            $table->string('correo_techo');
            $table->integer('ofi_id')->nullable();
            $table->string('entro_costo');
            $table->string('jefe');
            $table->string('correojefe');
            $table->string('jefepartiacal')->nullable();
            $table->string('correojefepartiacal')->nullable();
            $table->string('swaddicional')->nullable();
            $table->string('lugarfisicoequipo');
            $table->string('fecha_entrega');
            $table->string('tipo_equipo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingreso_directors');
    }
}
