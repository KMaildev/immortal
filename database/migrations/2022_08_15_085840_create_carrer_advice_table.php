<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerAdviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrer_advice', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title_eng')->nullable();
            $table->text('title_jp')->nullable();
            $table->text('description_eng')->nullable();
            $table->text('description_jp')->nullable();
            $table->text('author')->nullable();
            $table->text('photo')->nullable();
            $table->text('upload_date')->nullable();
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
        Schema::dropIfExists('carrer_advice');
    }
}
