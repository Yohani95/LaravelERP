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
        Schema::create('cafs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('ruta');
            $table->dateTime('expiration_date')->nullable();
            $table->bigInteger('quantity_avaible');
            $table->bigInteger('initial_folio');
            $table->bigInteger('last_folio');
            $table->bigInteger('current_folio');
            $table->bigInteger('document_code');
            $table->foreignId('user_id')->references('id')->on('users');
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
