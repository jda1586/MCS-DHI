<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCashoutLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cashout_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cashout_id');
            $table->string('status');
            $table->text('note')->nullable();
            $table->integer('responsible_id');
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
        Schema::drop('user_cashout_logs');
    }
}
