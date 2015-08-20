<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArtikelTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_artikel');
            $table->foreign('id_artikel')->references('id')->on('artikel')->onDelete('CASCADE');
            $table->unsignedInteger('id_tags');
            $table->foreign('id_tags')->references('id')->on('tags')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('artikel_tags');
    }
}
