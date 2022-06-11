<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('school');
            $table->string('district');
            $table->string('regional');
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
        Schema::dropIfExists('chances');
    }
}
