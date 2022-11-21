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
        Schema::create('supplies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable()->default('text');
            $table->string('code', 100)->nullable()->default('text');
            $table->integer('count')->nullable();
            $table->bigInteger('price')->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('sub_category_id')->references('id')->on('sub_categories');
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
