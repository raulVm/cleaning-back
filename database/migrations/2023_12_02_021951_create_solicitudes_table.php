<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario');
            $table->string('nombre_completo');
            $table->string('correo_electronico');
            $table->integer('telefono');
            $table->integer('id_estado');
            $table->integer('id_municipio');
            $table->integer('id_localidad');
            $table->integer('id_colonia');
            $table->string('servicio');
            $table->string('descripcion');
            $table->string('estatus');
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
        Schema::dropIfExists('solicitudes');
    }
};
