<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indice_user', function (Blueprint $table) {

                      
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('indice_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('indice_id')->references('id')->on('indices')->onDelete('cascade');
            $table->primary(['user_id', 'indice_id']);
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
        Schema::dropIfExists('indice_user');
    }
};
