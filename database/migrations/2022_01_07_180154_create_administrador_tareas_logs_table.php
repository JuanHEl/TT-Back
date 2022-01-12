<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorTareasLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador_tareas_logs', function (Blueprint $table) {
            $table->bigIncrements('id_administrador_tareas_logs');
            $table->dateTime('fecha_inicio')->nullable()->comment('Fecha de inicio de la tarea');
            $table->dateTime('fecha_fin')->nullable()->comment('Fecha de fin de la tarea');
            $table->string('local_dir_mac', 40)->comment('dirección mac de donde se aplica la tarea');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrador_tareas_logs');
    }
}
