<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesStatisticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_statistic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('article_id');
            $table->string('viewer_ip');
            $table->timestamps();
        });

        Schema::table('articles_statistic', function(Blueprint $table){
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('casecade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_statistic');
    }
}
