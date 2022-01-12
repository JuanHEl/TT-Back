<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorServiciosLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador_servicios_logs', function (Blueprint $table) {
            $table->bigIncrements('id_administrador_servicios_logs');
            $table->string('ip_dispositivo_ant', 40)->comment('dirección ip anterior');            
            $table->string('ip_dispositivo_desp', 40)->comment('dirección ip posterior');
            $table->dateTime('fecha_inicio')->nullable()->comment('Fecha de inicio del servicio');
            $table->dateTime('fecha_fin')->nullable()->comment('Fecha de fin del servicio');
            $table->string('local_dir_mac', 40)->comment('dirección mac de donde se aplica al servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrador_servicios_logs');
    }
}
