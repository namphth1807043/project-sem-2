<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('service');
            $table->text('description');
            $table->text('qualification');
            $table->text('experience');
            $table->string('image');
            $table->string('rating');
            $table->timestamps();
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_trainings');
    }
}