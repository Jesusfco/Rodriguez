<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventPhotoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_photo_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_photo_id');
            $table->integer('event_photo_section_id');
            $table->string('img');
            $table->integer('order')->nullable();
            $table->text('selects')->nullable();
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
        Schema::dropIfExists('event_photo_images');
    }
}
