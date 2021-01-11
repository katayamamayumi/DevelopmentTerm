<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('goal_id');
            $table->string('task_name');
            $table->string('description');
            $table->string('contents');
            $table->string('status');
            $table->dateTime('start_dt');
            $table->dateTime('complete_plan_dt');
            $table->dateTime('complete_dt');

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
        Schema::dropIfExists('task');
    }
}
