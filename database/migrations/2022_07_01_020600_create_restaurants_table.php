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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');          
            $table->bigInteger('prices');
            $table->string('image');
            $table->string('discription');
            // $table->string('category');
            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id')
            ->references('id')->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
         
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
        Schema::dropIfExists('restaurants');
    }
};
