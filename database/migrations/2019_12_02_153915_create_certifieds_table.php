<?php

use Faker\UniqueGenerator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertifiedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifieds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city');
            $table->string('car_info');
            $table->string('registration_city');
            $table->integer('mileage');
            $table->string('color');
            $table->string('image')->nullable();
            $table->string('engine');
            $table->string('transmission');
            $table->string('assembly');
            $table->integer('model');
            $table->text('description');
            $table->integer('price');
            $table->string('ad_id')->default(uniqid());
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
        Schema::dropIfExists('certifieds');
    }
}
