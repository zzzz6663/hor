<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('info');
            $table->text('txt_before');
            $table->text('txt_after');
            $table->string('color');
            $table->string('img');
            $table->unsignedInteger('price');
            $table->unsignedInteger('day_p')->nullable();
            $table->string('sound');
            $table->boolean('show')->default('0');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
