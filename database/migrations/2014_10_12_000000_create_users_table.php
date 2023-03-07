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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->date('date_naissance');
            $table->string('lieu_naissance');  
            $table->enum('sexe',['F','M']);
            $table->string('image');

            $table->string('tel')->unique()->nullable();
            $table->string('cin')->unique();
  
            $table->date('date_ambauche');
          
                                                               
            $table->enum('situation_familial',['Marié(e)','Divorcé(e)','Célibataire']);
            $table->unsignedInteger('Nbr_enfants')->nullable();

            $table->enum('status', ['active', 'inactive']);

         

             
            $table->string('password'); 
            $table->timestamp('email_verified_at')->nullable(); 
                         
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
};
