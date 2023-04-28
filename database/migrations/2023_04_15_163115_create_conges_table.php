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
        Schema::create('conges', function (Blueprint $table) {
            $table->id();
            
            $table->date('date_debut');
            $table->date('date_fin'); 
            $table->integer('duration'); 
            
            
            $table->boolean('annulation')->default(false);
            
            $table->date('date_annulation')->nullable()->default(null);
            

            $table->enum('status',['Validé','En cours','Refusé'])->default('En cours');
            
            
           
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('type_conge_id');
            $table->foreign('type_conge_id')->references('id')->on('type_conges')->onDelete('cascade');
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
        Schema::dropIfExists('conges');
    }
};
