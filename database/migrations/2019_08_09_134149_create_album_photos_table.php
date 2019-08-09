<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image');
            $table->integer('album_id')->unsigned()->default('0');
            $table->timestamps();
        });

        Schema::create('album_photo_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('album_photo_id')->unsigned();
            
            $table->string('title')->nullable();
            $table->text('description')->nullable();

            $table->string('locale')->index();
            $table->unique(['album_photo_id','locale']);
            $table->foreign('album_photo_id')->references('id')->on('album_photos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_photos');
    }
}
