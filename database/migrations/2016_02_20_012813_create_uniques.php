<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUniques extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('texts', function (Blueprint $table) {
            $table->index('title');
            $table->unique(['title', 'user_id']);
        });
        Schema::table('creditcards', function (Blueprint $table) {
            $table->index('number');
            $table->unique(['number', 'user_id']);
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
            $table->dropUnique('texts_title_user_id_unique');
            $table->dropIndex('texts_title_index');
        });
        Schema::table('creditcards', function (Blueprint $table) {
            $table->dropUnique('creditcards_number_user_id_unique');
            $table->dropIndex('creditcards_number_index');
        });
    }
}
