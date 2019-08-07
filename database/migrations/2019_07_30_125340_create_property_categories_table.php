<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('prop_category_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('property_category_id')->unsigned();
            
            $table->string('title')->nullable();
            $table->text('description')->nullable();

            $table->string('locale')->index();
            $table->unique(['property_category_id','locale']);
            $table->foreign('property_category_id')->references('id')->on('property_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_categories');
    }
}
