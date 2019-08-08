<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image')->nullable();
            $table->text('view')->nullable();
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('category_id')->unsigned()->default('0');
            $table->timestamps();
        });

        Schema::create('news_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('news_id')->unsigned();
            
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('slug')->nullable();

            $table->string('locale')->index();
            $table->unique(['news_id','locale']);
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
