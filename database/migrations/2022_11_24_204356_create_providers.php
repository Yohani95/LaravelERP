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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('business_name', 100)->nullable()->default('text');
            $table->string('rut', 100)->nullable()->default('text');
            $table->string('direcction', 100)->nullable()->default('text');
            $table->string('email', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('giro');
            $table->string('comuna');
            $table->string('pag_web')->nullable()->default('paginaweblink');
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
        Schema::dropIfExists('providers');
    }
};
