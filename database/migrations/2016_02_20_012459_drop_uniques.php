<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DropUniques extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('texts', function (Blueprint $table) {
            $table->dropUnique('texts_title_unique');
        });
        Schema::table('creditcards', function (Blueprint $table) {
            $table->dropUnique('creditcards_number_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('texts', function (Blueprint $table) {
            $table->unique('title');
        });
        Schema::table('creditcards', function (Blueprint $table) {
            $table->unique('number');
        });
    }
}
