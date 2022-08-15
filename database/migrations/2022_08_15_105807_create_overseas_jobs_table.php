<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverseasJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overseas_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title_eng')->nullable();
            $table->text('title_jp')->nullable();
            $table->text('photo')->nullable();
            $table->text('status')->nullable();
            $table->integer('countrie_id')->nullable();
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
        Schema::dropIfExists('overseas_jobs');
    }
}
