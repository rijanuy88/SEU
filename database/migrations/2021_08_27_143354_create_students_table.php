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
    // create the table
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('applicantID')->unique()->nullable();
            $table->string('studLastName');
            $table->string('studFirstName');
            $table->string('studMiddleName');
            $table->string('studSuffix')->nullable();
            $table->string('studLandline');
            $table->string('studMobileNumber');
            $table->string('studAddress');
            $table->date('studBirthDate');
            $table->integer('studAge');
            $table->string('studSHS');
            $table->string('studYearGrad');
            $table->string('studCourse1');
            $table->string('studCourse2');
            $table->string('studCourse3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // delete the table
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
