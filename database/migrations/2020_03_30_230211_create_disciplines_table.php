<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('group')->nullable();
            $table->string('code')->nullable();
            $table->integer('countHours')->nullable();
            $table->boolean('courseWork')->default(false);
            $table->boolean('examination')->default(false);
            $table->string('nameId')->default("0");
            $table->enum('sign', ['bachelor', 'magistracy', 'speciality'])->default('bachelor');
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
        Schema::dropIfExists('disciplines');
    }
}

