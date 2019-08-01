<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique()->nullable(); // Campo estra para el código de la materia
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('picture')->nullable();
            $table->text('editor')->nullable();

            // Un curso puede tener muchos profesores
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->foreign('teacher_id')->references('id')->on('teachers');

            // Un curso puede tener muchas categorías
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            // Un curso tiene un nivel
            $table->unsignedBigInteger('level_id')->nullable();
            $table->foreign('level_id')->references('id')->on('levels');

            // Un curso puede tener muchos grupos
            //$table->unsignedBigInteger('group_id')->nullable();
            //$table->foreign('group_id')->references('id')->on('groups');

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
        Schema::dropIfExists('courses');
    }
}
