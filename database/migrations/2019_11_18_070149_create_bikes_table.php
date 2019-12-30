<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('city');
            $table->string('bike_info');
            $table->string('registration_city');
            $table->integer('mileage');
            $table->string('image')->nullable();
            $table->string('engine');
            $table->integer('model');
            $table->string('condition');
            $table->text('description');
            $table->integer('price');
            $table->tinyInteger('negotiable');
            $table->tinyInteger('features')->default(0);
            $table->tinyInteger('certified')->default(0);
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
        Schema::dropIfExists('bikes');
    }
}
