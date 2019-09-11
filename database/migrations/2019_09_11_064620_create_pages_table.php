<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('code')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });

        Schema::create('pages_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('pages_id')->unsigned();
            
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('slug')->nullable();

            $table->string('locale')->index();
            $table->unique(['pages_id','locale']);
            $table->foreign('pages_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
