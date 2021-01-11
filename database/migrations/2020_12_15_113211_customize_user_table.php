<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomizeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ユーザーテーブルのカスタマイズ
        Schema::table('users', function (Blueprint $table) {
            $table->string('nickname');
            $table->string('gender');
            $table->string('hobby');
            $table->string('birthday');
            $table->string('word');
            $table->string('image_path')->nullable();
            $table->string('image_path_thumbnail')->nullable();
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
            $table->dropColumn('nickname');
            $table->dropColumn('gender');
            $table->dropColumn('hobby');
            $table->dropColumn('birthday');
            $table->dropColumn('word');
            $table->dropColumn('image_path')->nullable();
            $table->dropColumn('image_path_thumbnail')->nullable();
        });
    }
}
