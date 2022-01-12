<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatServiciosAdministradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_servicios_administradores', function (Blueprint $table) {
            $table->bigIncrements('id_cat_servicios_administradores');
            $table->dateTime('fecha_ult_mod')->nullable()->comment('Fecha en la que se modificó el catalogo por ultima vez');
            $table->integer('status_servicios_admin');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_servicios_administradores');
    }
}
