<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wallets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->float('activation');
            $table->float('commission');
            $table->float('auction');
            $table->float('utilities');
            $table->float('balance');
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
        Schema::drop('user_wallets');
    }
}
