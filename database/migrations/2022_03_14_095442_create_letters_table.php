<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cschool');
            $table->string('cdistrict');
            $table->string('tdistrict');
            $table->string('description');
            $table->string('ward');
            $table->string('Headmaster')->default('PENDIND');
            $table->string('WEO')->default('PENDIND');
            $table->string('DEO')->default('PENDIND');
            $table->string('DED')->default('PENDIND');
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
        Schema::dropIfExists('letters');
    }
}
