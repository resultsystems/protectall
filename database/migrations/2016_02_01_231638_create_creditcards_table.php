<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditcards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->string('number')->unique();
            $table->text('cvv')->nullable();
            $table->text('password');
            $table->text('data_crypt')->nullable();
            $table->text('obs')->nullable();
/*
$table->foreign('user_id')
->references('id')
->on('users');
 */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('creditcards');
    }
}
