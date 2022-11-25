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
        Schema::create('dtes', function (Blueprint $table) {
            $table->id();
            $table->integer('type_document');
            $table->bigInteger('num_folio');
            $table->string('track_id', 200)->default('N/A');
            $table->string('name_route_xml', 300);
            $table->boolean('confirmed_send_sii')->nullable()->default(false);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('status_id')->references('id')->on('statuses');
            $table->foreignId('payment_status')->references('id')->on('statuses');
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
        Schema::dropIfExists('dtes');
    }
};
