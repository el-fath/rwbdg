<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('album_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('album_id')->unsigned();
            
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('slug')->nullable();

            $table->string('locale')->index();
            $table->unique(['album_id','locale']);
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
