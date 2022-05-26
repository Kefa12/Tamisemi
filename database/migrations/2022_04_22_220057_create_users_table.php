<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email1');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('school')->default('PENDIND');
            $table->string('regional')->default('PENDIND');
            $table->string('district')->default('PENDIND');
            $table->string('ward')->default('PENDIND');
            $table->string('schools')->default('PENDIND');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
