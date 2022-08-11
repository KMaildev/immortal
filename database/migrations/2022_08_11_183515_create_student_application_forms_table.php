<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_application_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('education')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('father')->nullable();
            $table->text('gender')->nullable();
            $table->text('nationality')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('apply_date')->nullable();
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
        Schema::dropIfExists('student_application_forms');
    }
}
