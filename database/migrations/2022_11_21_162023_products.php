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
        Schema::create('products', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable()->default('text');
            $table->string('code', 100)->nullable()->default('text');
            $table->integer('count')->nullable();
            $table->bigInteger('price')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('cellar_id')->references('id')->on('cellars');
            $table->foreignId('sub_category_id')->references('id')->on('sub_categories');
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
