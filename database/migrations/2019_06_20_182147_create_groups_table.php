<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

            // Un grupo tiene un nivel
            $table->unsignedBigInteger('level_id')->nullable();
            $table->foreign('level_id')->references('id')->on('levels');

            // Un grupo pertenece a una escuela
            $table->unsignedBigInteger('school_id')->nullable();
            $table->foreign('school_id')->references('id')->on('schools');
            
            // Un grupo tiene muchos cursos
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

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
        Schema::dropIfExists('groups');
    }
}
