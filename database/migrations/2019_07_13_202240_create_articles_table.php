<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('author_id');
            $table->string('title');
            $table->enum('type', ['berita', 'bertutur']);
            $table->string('slug')->unique()->default('Anonym');
            $table->string('banner_path')->nullable();
            $table->text('article', 5000);
            $table->integer('status');
            $table->timestamps();
        });

        Schema::table('articles', function(Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('users')->onDelete('set default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
