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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_g')->unique();
            $table->float('salaire_de_base');
            $table->boolean('besoin_concours')->default(true);


            $table->unsignedBigInteger('cadre_id')->unsigned();
            $table->foreign('cadre_id')->references('id')->on('cadres')->onDelete('cascade'); 

            $table->timestamps();
        });
    }
       //users:  {  'nom','prenom','date_naissance','lieu_naissance','sex',
       //'image','tel','cin','date_ambauche','situation_familial','Nbr_enfants','status',}
       //corps :{libelle}
       //cadres :{libelle_c,corp_id}
       //grades :{libelle_g,salaire_de_base ,besoin_concours,cadre_id}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
};
