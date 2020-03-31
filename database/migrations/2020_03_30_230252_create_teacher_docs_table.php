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
            $table->enum('sign', ['bachelor', 'magistracy', 'speciality'])->default('bachelor');
            $table->string('ISBN', 10);
            $table->integer('bookYear');
            $table->string('press', 40);
            $table->integer('pages');
            $table->string('doc_number', 5);
            $table->string('paper', 50);
            $table->dateTime('document');
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
