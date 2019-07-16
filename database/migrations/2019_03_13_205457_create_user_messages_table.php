<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('recipient_id');
            $table->foreign('recipient_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->string('message');
            $table->timestamps();
        });

        // Schema::table('users_messages', function (Blueprint $table) {
        //     $table->unsignedBigInteger('sender_id');
        //     $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->unsignedBigInteger('recipient_id');
        //     $table->foreign('recipient_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->unsignedBigInteger('article_id');
        //     $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        // });


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
