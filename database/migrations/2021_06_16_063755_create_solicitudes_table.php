<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('prioridad');
            $table->unsignedBigInteger('supervisor_id');
            $table->string('modulo');
            $table->foreignId('problema_id')->constrained('problemas');
            $table->foreignId('bitacora_id')->constrained('bitacoras');
            $table->foreignId('maquina_id')->constrained('maquinas');
            $table->foreign('supervisor_id')->references('id')->on('users');
            $table->dateTime('llegada_mecanico');
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
}
