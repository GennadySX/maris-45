<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name',40)->nullable();
            $table->string('department',40)->nullable();
            $table->string('institute',40)->nullable();
            $table->date('birth')->nullable();
            $table->string('place', 20)->nullable();
            $table->string('address', 60)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('education', 40)->nullable();
            $table->integer('year')->nullable();
            $table->string('speciality', 30)->nullable();
            $table->string('picture')->nullable();
            $table->boolean('degreeYes')->default(true);
            $table->integer('degree')->nullable();
            $table->integer('rank')->nullable();
            $table->string('post',20)->nullable();
            $table->text('comment')->nullable();
            $table->string('passport', 20)->nullable();
            $table->date('passportDate')->nullable();
            $table->string('region', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
