<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('creator_id')->nullable();
            $table->string('name')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique();
            $table->integer('gender')->nullable();
            $table->integer('type');
            $table->string('img')->nullable();
            $table->integer('status')->default(1);
            $table->string('password')->nullable();
            $table->string('enterprise')->nullable();
            
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
