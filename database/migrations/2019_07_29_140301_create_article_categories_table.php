<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('article_category_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('article_category_id')->unsigned();
            
            $table->string('title')->nullable();
            $table->text('description')->nullable();

            $table->string('locale')->index();
            $table->unique(['article_category_id','locale']);
            $table->foreign('article_category_id')->references('id')->on('article_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_categories');
    }
}
