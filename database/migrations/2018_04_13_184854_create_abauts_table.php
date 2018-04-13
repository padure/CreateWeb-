<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbautsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abauts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nr');
            $table->string('language');
            $table->string('date');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('class');
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
        Schema::dropIfExists('abauts');
    }
}
