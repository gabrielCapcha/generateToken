<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname', 255)->nullable(false)->after('name');
            $table->string('question_1', 255)->nullable(false)->after('remember_token');
            $table->string('question_2', 255)->nullable(false)->after('question_1');
            $table->string('question_3', 255)->nullable(false)->after('question_2');
            $table->string('question_4', 255)->nullable(false)->after('question_3');
            $table->string('document', 255)->nullable(false)->after('question_4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
