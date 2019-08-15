<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('listing_number')->nullable();
            $table->string('listing_code')->nullable();
            $table->text('address')->nullable();
            $table->text('region')->nullable();
            $table->string('certificate')->nullable();
            $table->string('dimension')->nullable();
            $table->integer('land_area')->nullable();
            $table->integer('building_area')->nullable();
            $table->string('against')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('electricity')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('extra_bedroom')->nullable();
            $table->integer('extra_bathroom')->nullable();
            $table->integer('cars')->nullable();

            $table->integer('status')->nullable();
            $table->integer('is_publised')->nullable();
            $table->integer('is_popular')->nullable();
            $table->integer('is_featured')->nullable();

            $table->integer('sale_price')->nullable();
            $table->integer('rent_price')->nullable();
            $table->string('type_transaction')->nullable();
            $table->string('type_property')->nullable();

            $table->integer('marketing_id')->unsigned()->default(0);
            $table->integer('category_id')->unsigned()->default(0);
            $table->integer('province_id')->unsigned()->default(0);
            $table->integer('city_id')->unsigned()->default(0);
            $table->integer('district_id')->unsigned()->default(0);
            $table->text('image')->nullable();

            $table->timestamps();
        });

        Schema::create('property_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('slug')->nullable();

            $table->string('locale')->index();
            $table->unique(['property_id','locale']);
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
