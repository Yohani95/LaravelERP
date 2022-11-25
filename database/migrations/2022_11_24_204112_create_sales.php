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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('description', 1000)->nullable();
            $table->bigInteger('iva');
            $table->bigInteger('total');
            $table->bigInteger('neto');
            $table->bigInteger('num_folio');
            $table->integer('type_document');
            $table->bigInteger('discount');
            $table->string('name_route_xml', 200)->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('status_id')->references('id')->on('statuses');
            $table->softDeletes();
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
        Schema::dropIfExists('sales');
    }
};
