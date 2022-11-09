<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('domsile_dirtrict')->nullable();
            $table->string('school_category')->nullable();
            $table->dateTime('ssesp_batch')->nullable();
            $table->string('class_adm_in')->nullable();
            $table->string('institution_studied')->nullable();
            $table->dateTime('passing_year')->nullable();
            $table->string('contact')->nullable();
            $table->string('current_status')->nullable();
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
        Schema::dropIfExists('alumnis');
    }
}
