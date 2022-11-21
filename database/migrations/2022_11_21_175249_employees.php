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
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable()->default('text');
            $table->string('lastname', 100)->nullable()->default('text');
            $table->string('rut', 100)->nullable()->default('text');
            $table->string('direcction', 100)->nullable()->default('text');
            $table->string('email', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('job_position_id')->references('id')->on('job_positions')->onDelete('cascade');
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
