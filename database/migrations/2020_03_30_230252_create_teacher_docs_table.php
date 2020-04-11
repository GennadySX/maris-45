<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_docs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('name_id')->unsigned();
            $table->string('name')->nullable();
            $table->text('comment')->nullable();
            $table->integer('user_id')->unsigned();
            $table->enum('sign', ['bachelor', 'magistracy', 'speciality'])->default('bachelor');
            $table->string('ISBN', 10)->nullable();
            $table->integer('bookYear')->nullable();
            $table->string('press', 40)->nullable();
            $table->integer('pages')->nullable();
            $table->string('doc_number', 5)->nullable();
            $table->string('paper', 50)->nullable();
            $table->dateTime('document')->nullable();
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
        Schema::dropIfExists('teacher_docs');
    }
}
