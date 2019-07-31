<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Primer Slide
            $table->string('firstTitle')->nullable();
            $table->string('firstCopy')->nullable();
            $table->string('firstText')->nullable();
            //Segundo Slide
            $table->string('secondTitle')->nullable();
            $table->string('secondCopy')->nullable();
            $table->string('secondText')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
