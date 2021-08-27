<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->primary('');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('suffix');
            $table->string('landline');
            $table->string('mobileNumber');
            $table->string('address');
            $table->string('birthdate');
            $table->string('age');
            $table->string('shs');
            $table->string('yearGraduated');
            $table->string('course1');
            $table->string('course2');
            $table->string('course3');
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
        Schema::dropIfExists('students');
    }
}
