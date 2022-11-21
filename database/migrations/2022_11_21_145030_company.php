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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('id');
            $table->string('razon_social');
            $table->string('rut_empresa');
            $table->string('giro');
            $table->string('comuna');
            $table->string('direccion');
            $table->bigInteger('telefono')->nullable();
            $table->string('pagina_web')->nullable()->default('paginaweblink');
            $table->string('email')->nullable()->default('email');
            $table->string('ruta_logo')->nullable()->default('rutalogo');
            $table->datetime('fecha_resolucion')->nullable();
            $table->bigInteger('numero_resolucion')->nullable();
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
        //
    }
};
