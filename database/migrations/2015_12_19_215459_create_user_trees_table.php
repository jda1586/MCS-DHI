<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_trees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('parent_id');
            $table->string('position');
            $table->integer('sponsor_id');
            $table->integer('matrix_parent');
            $table->integer('matrix_position');
            $table->integer('product_id');
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
        Schema::drop('user_trees');
    }
}
