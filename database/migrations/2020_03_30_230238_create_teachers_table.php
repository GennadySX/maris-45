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
            $table->string('name',40);
            $table->string('department',40);
            $table->string('institute',40);
            $table->dateTime('birth');
            $table->string('place', 20);
            $table->string('address', 60);
            $table->string('phone', 15);
            $table->string('education', 40);
            $table->integer('year');
            $table->string('speciality', 30);
            $table->string('picture');
            $table->boolean('degreeYes')->default(true);
            $table->integer('degree');
            $table->integer('rank');
            $table->string('post',20);
            $table->text('comment');
            $table->string('passport', 20);
            $table->dateTime('passportDate');
            $table->string('region', 40);
            $table->integer('subject_id');
            $table->string('code',15);
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
        Schema::dropIfExists('teachers');
    }
}
