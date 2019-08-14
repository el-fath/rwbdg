<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('slug')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('image')->nullable();
            $table->integer('level_id')->unsigned()->default(0);
            $table->timestamps();
        });

        Schema::create('marketing_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('marketing_id')->unsigned();
            
            $table->text('description')->nullable();

            $table->string('locale')->index();
            $table->unique(['marketing_id','locale']);
            $table->foreign('marketing_id')->references('id')->on('marketings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketings');
    }
}
