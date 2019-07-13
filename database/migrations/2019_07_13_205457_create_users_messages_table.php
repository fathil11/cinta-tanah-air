<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sender_id');
            $table->string('recipient_id');
            $table->string('article_id');
            $table->string('message');
            $table->timestamps();
        });

        Schema::table('users_messages', function (Blueprint $table){
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('casecade');
            $table->foreign('recipient_id')->references('id')->on('users')->onDelete('casecade');
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
        Schema::dropIfExists('user_message');
    }
}
