<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('creator_id');
            $table->integer('service_id');
            $table->integer('work_status_id')->default(1);
            $table->string('title')->unique();
            $table->text('resume')->nullable();
            $table->text('description')->nullable();            
            $table->double('cost', 8, 2);   
            $table->string('img')->nullable();
            $table->boolean('public')->default(false);
            $table->text('youtube')->nullable();
            $table->integer('photos_quantity')->nullable();                                    
            $table->string('commentary_client')->nullable();
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
        Schema::dropIfExists('works');
    }
}
