<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsernamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usernames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service');
            $table->string('username');
            $table->text('password');
            $table->text('note')->nullable();
            $table->bigInteger('user_id')->unsigned();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usernames');
    }
}
