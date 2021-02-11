<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable()->unique();
            $table->unsignedBigInteger('mobile')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('admin_level')->default('customer');
            $table->string('password')->nullable();
            $table->unsignedBigInteger('file_number')->default('0');
            $table->unsignedBigInteger('cash')->default('0');
            $table->string('invite_type')->default('direct');
            $table->enum('gender',['male','female'])->default('female');
            $table->enum('complete_pro_questionnaire',['0','1'])->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
