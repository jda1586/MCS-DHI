<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('flag');
            $table->integer('lenguage_id');
            $table->string('country_code');
            $table->string('local_name');
            $table->string('web_code');
            $table->string('region');
            $table->string('continent');
            $table->decimal('latitude', 8, 2);
            $table->decimal('longitude', 8, 2);
            $table->decimal('surface_area', 8, 2);
            $table->decimal('population', 8, 2);
            $table->integer('enabled');
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
        Schema::drop('countries');
    }
}
