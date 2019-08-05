<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image')->nullable();
            $table->text('slug')->nullable();
            $table->timestamps();
        });

        Schema::create('slide_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('slide_id')->unsigned();
            
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            

            $table->string('locale')->index();
            $table->unique(['profile_id','locale']);
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
