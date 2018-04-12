<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortofoliusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portofolius', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('subtitle');
            $table->string('description');
            $table->date('date');
            $table->string('client');
            $table->string('categorie');
            $table->string('url');
            $table->string('thumbnail');
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
        Schema::dropIfExists('portofolius');
    }
}
