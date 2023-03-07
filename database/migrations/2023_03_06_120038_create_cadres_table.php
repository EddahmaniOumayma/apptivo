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
        Schema::create('cadres', function (Blueprint $table) {
            $table->id();
            $table->string("libelle_c");
            
            $table->unsignedBigInteger('corp_id')->unsigned();
            $table->foreign('corp_id')->references('id')->on('corps')->onDelete('cascade'); 
            $table->timestamps();
        });
    }
           //users:  {  'nom','prenom','date_naissance','lieu_naissance','sex',
    //'image','tel','cin','date_ambauche','situation_familial','Nbr_enfants','status',}
       //corps :{libelle}
       //cadres :{libelle_c,corp_id}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadres');
    }
};
