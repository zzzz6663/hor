<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name') ;
            $table->text('info_discount') ;
            $table->text('info_sale') ;
            $table->string('code')->nullable();
            $table->string('type');
            $table->string('sound')->nullable();
            $table->string('image')->nullable();
            $table->enum('show',[1,0])->default(0);
            $table->enum('remember',[1,0])->default(0);
            $table->timestamp('expired_at')->nullable();
            $table->unsignedInteger('count')->nullable();
            $table->unsignedInteger('final_price')->nullable();
            $table->integer('percent');
            $table->string('user')->nullable();
            $table->timestamps();
        });
        Schema::create('discount_product', function (Blueprint $table) {
                $table->unsignedBigInteger('discount_id');
//                $table->foreign('discount_id')->references('id')->on('discount')->onDelete('cascade');

                $table->unsignedBigInteger('product_id');
//                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

                $table->unique(['discount_id','product_id']);
        });

        Schema::create('category_discount', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('discount_id');
            $table->unique(['category_id','discount_id']);
        });


        Schema::create('discount_user', function (Blueprint $table) {
            $table->unsignedBigInteger('discount_id');
            $table->unsignedBigInteger('user_id');
            $table->unique(['discount_id','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('discount_product');
        Schema::dropIfExists('category_discount');
        Schema::dropIfExists('discount_user');
        Schema::dropIfExists('discounts');
    }
}
