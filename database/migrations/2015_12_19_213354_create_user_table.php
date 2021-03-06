<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user')->unique();
            $table->string('password');
            $table->string('email');
            $table->string('name');
            $table->string('lastname');
            $table->date('birthdate');
            $table->string('phone');
            $table->string('address');
            $table->datetime('renew');
            $table->integer('product_id');
            $table->integer('rol_id');
            $table->string('status')->defult('pending');
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
        Schema::drop('users');
    }
}
