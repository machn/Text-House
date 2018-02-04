<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textmessage', function (Blueprint $table) {
            $table->increments('MessageId')->index();
            $table->string('username');
            $table->timestamp('MessageTimeStamp')-> nullable();
            $table->string('MessageReceiver');
            $table->string('SentMessage');

        });

        Schema::table('textmessage', function($table)
        {
            $table->foreign('username')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('textmessage');
    }
}