<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals_role', function (Blueprint $table) {
            $table->id();
              $table->unsignedBigInteger('user_id')->default('Government_rank');
            $table->unsignedBigInteger('role_id')->default('Government_rank');
            $table->unsignedBigInteger('hospital_id')->default('Government_rank');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('hospital_id')->references('id')->on('hospitals')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['user_id', 'role_id', 'hospital_id']);
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
        Schema::dropIfExists('hospitals_role');
    }
}
