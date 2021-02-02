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
            $table->string('nickname')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
            $table->string('hobby')->nullable()->default(null);
            $table->string('birthday')->nullable()->default(null);
            $table->string('word')->nullable()->default(null);
            $table->string('image_path')->nullable()->default(null);
            $table->string('image_path_thumbnail')->nullable()->default(null);
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
            $table->dropColumn('image_path');
            $table->dropColumn('image_path_thumbnail');
        });
    }
}
