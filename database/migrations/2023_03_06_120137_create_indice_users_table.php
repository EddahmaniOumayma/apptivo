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
        Schema::create('indice_users', function (Blueprint $table) {
            $table->id();
          
            $table->date('date');
            
            $table->unsignedBigInteger('indice_id')->unsigned();
            $table->foreign('indice_id')->references('id')->on('indices')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
        //users:  {  'nom','prenom','date_naissance','lieu_naissance','sex',
       //'image','tel','cin','date_ambauche','situation_familial','Nbr_enfants','status',}
       //corps :{libelle}
       //cadres :{libelle_c,corp_id}
       //grades :{libelle_g,salaire_de_base ,besoin_concours,cadre_id}
       //indices :{libelle_i,grade_id}
       //indice_users :{date,indice_id,user_id}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indice_users');
    }
};
