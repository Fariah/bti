<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tags', function (Blueprint $table) {
            $table->integer('news_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_tags');
    }
}
