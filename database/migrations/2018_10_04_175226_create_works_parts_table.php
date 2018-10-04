<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_id');   
            $table->string('title');            
            $table->text('description')->nullable();   
            $table->double('cost', 8, 2);   
            $table->integer('status')->default(1);   
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
        Schema::dropIfExists('works_parts');
    }
}
